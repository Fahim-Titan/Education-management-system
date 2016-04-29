<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $table = 'courses';
	public $timestamps = false;
	protected $fillable = array('sub_id1', 't_id1', 'sub_id2', 't_id2', 'sub_id3', 't_id3', 'sub_id4', 't_id4', 'sub_id5', 't_id5', 'sub_id6', 't_id6', 'sub_id7', 't_id7', 'sub_id8', 't_id8', 'sub_id9', 't_id9', 'sub_id10', 't_id10', 'sub_id11', 't_id11', 'sub_id12', 't_id12', 'sub_id13', 't_id13', 'sub_id14', 't_id14');

}