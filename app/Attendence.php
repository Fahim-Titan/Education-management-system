<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model {

	protected $table = 'attendences';
	public $timestamps = false;
	protected $fillable = array('c_id', 'sub_id', 't_id', 'attend', 'date');

}