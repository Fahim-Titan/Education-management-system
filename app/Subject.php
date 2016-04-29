<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

	protected $table = 'subjects';
	public $timestamps = false;
	protected $fillable = array('textbook_name', 'sub_name', 'credit');

}