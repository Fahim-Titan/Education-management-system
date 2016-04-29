<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model {

	protected $table = 'lectures';
	public $timestamps = false;
	protected $fillable = array('t_id', 'c_id', 'sub_id', 'file');

}