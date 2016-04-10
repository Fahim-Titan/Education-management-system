<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class front extends Controller
{
    //
    public function add_user(){
        return view('admin.add_user');
    }
}
