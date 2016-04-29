<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	protected $table = 'students';
	public $timestamps = false;
	protected $fillable = array('name', 'gender', 'blood_type', 'email', 'dob', 'phone_number', 'address', 'image', 'father_name', 'mother_name', 'gurdian_phone_number');
	protected $hidden = array('password');

}