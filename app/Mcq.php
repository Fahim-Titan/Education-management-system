<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcq extends Model {

	protected $table = 'mcqs';
	public $timestamps = false;
	protected $fillable = array('e_qs', 'image', 'opt_1', 'opt_2', 'opt_3', 'opt_4');

}