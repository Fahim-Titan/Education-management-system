<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

	protected $table = 'admins';
	public $timestamps = false;
	protected $fillable = array('name', 'gender', 'blood_type', 'email', 'dob', 'phone_number', 'address', 'image');
	protected $hidden = array('password');

}