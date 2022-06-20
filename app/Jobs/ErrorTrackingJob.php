<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ErrorTrackingMail;

class ErrorTrackingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $recipient = 'info@demi.sk';

    private $send_mail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->send_mail = env('DEMI_ERROR_TRACKING_SEND_MAIL');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $log_file_name = $this->get_current_log_file_name();

        if ( $log_file_name ){
            $handle = fopen( storage_path("logs/$log_file_name"), "r" );

            if ($handle) {

                $errors = [];
                while (($line = fgets($handle)) !== false) {
                    if( $error = $this->get_error($line) ){
                        if( ! $this->error_exists($error) ){
                            $errors[] = $error;
                        }
                    }
                }

                fclose($handle);

                $this->create_errors($errors);
                
                if($this->send_mail && sizeof($errors) > 0){
                    $this->send_mail($errors);
                }
            }

        }
    }

    public function get_error($line){
        $system = env('APP_ENV');

        if ( ! preg_match( '/\[[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\] '.$system.'.ERROR/', $line ) ) return false;

        $from = strpos($line, 'ERROR:') + 7;
        $to = strpos($line, '{') - $from - 1;

        return [
            'error' => substr($line, $from, $to),
            'timestamp' => substr($line, 1, 19),
        ];
    }

    public function error_exists($error){
        return DB::table('error_logs')->where($error)->exists();
    }

    public function create_errors($errors){
        $now = now()->format('Y-m-d H:i:s');
        foreach ($errors as $key => $error) $errors[$key]['created_at'] = $errors[$key]['updated_at'] = $now;

        DB::table('error_logs')->insert($errors);
    }

    public function send_mail($errors){
        Mail::to($this->recipient)
        ->send( new ErrorTrackingMail($errors) );
    }

    public function get_current_log_file_name(){
        $log_channel = config('logging.default');

        if($log_channel == 'stack'){
            $channels = config('logging.channels.stack.channels');
            if( in_array('single', $channels) ) $log_channel = 'single';
            if( in_array('daily', $channels) ) $log_channel = 'daily';
        }

        $log_file_name = null;

        switch ($log_channel) {
            case 'single':
                $log_file_name = 'laravel.log';
                break;
            case 'daily':
                $log_file_name = 'laravel-' . now()->format('Y-m-d') . '.log';
                break;
        }

        return $log_file_name;
    }
}
