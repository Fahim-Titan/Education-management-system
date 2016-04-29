<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model {

	protected $table = 'results';
	public $timestamps = false;
	protected $fillable = array('c_id', 's_id', 'e_id', 'sub_id', 'number');

}