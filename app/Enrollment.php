<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model {

	protected $table = 'enrollments';
	public $timestamps = false;
	protected $fillable = array('c_id', 's_id');

}