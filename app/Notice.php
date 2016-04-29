<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model {

	protected $table = 'notices';
	public $timestamps = false;
	protected $fillable = array('n_data', 'date');

}