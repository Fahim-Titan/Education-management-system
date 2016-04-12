<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
    protected $table = 'admin';

    public function User(){
        $this->belongsTo('app\User');
    }
}
