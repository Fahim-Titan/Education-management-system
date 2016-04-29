<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {

	protected $table = 'teachers';
	public $timestamps = false;
	protected $fillable = array('name', 'gender', 'blood_type', 'email', 'dob', 'phone_number', 'address', 'image', 'qualification');
	protected $hidden = array('password');

}