<?php

namespace Database\Seeders;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!User::where('email', 'admin')->count() > 0 && env('APP_ENV') != 'production'){
            DB::table('users')->insert([
                'name' => 'admin',
                'surname' => 'admin',
                'email' => 'admin',
                'password' => bcrypt('admin'),
                'admin' => 1,
                'super_admin' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

        if(!User::where('email', 'superadmin')->count() > 0 && env('APP_ENV') != 'production'){
            DB::table('users')->insert([
                'name' => 'superadmin',
                'surname' => 'superadmin',
                'email' => 'superadmin',
                'password' => bcrypt('superadmin'),
                'admin' => 1,
                'super_admin' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

        if(!User::where('email', 'miroslav.grofcik@demi.sk')->count() > 0 && env('APP_ENV') == 'production'){
            DB::table('users')->insert([
                'name' => 'Miroslav',
                'surname' => 'Grofčík',
                'email' => 'miroslav.grofcik@demi.sk',
                'password' => bcrypt('password'),
                'admin' => 1,
                'super_admin' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
