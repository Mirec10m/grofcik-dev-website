<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function getFormattedCreatedAtAttribute(){
        return Carbon::parse($this->created_at)->format('d.m.Y H:i:s');
    }

    public function getFormattedUpdatedAdAttribute(){
        return Carbon::parse($this->updated_at)->format('d.m.Y H:i:s');
    }

    protected function _translateProperty($property, $return_null = false){
        $translated_string = $this->{$property . '_' . app()->getLocale()};

        $result = $return_null ? null : $this->{$property . '_sk'};

        return isset($translated_string) && $translated_string != "" ? $translated_string : $result;
    }
}
