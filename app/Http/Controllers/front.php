<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\User;

class front extends Controller
{
    //
    public function add_user()
    {
        return view('admin.add_user');
    }

    public function add_teacher()
    {
        $level_name = 'Teacher';
        return view('admin.form')->with('level_name',$level_name);
    }

    public function add_student(){
        $level_name = 'Student';
        return view('admin.form',compact('level_name'));
    }

    public function save_user(){
        $input = Request::all();

        User::create($input);
        return "i guess it worked";
        //return $input;


    }
}

