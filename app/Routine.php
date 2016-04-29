<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model {

	protected $table = 'routines';
	public $timestamps = false;
	protected $fillable = array('r_data');

}