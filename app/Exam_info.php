<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam_info extends Model {

	protected $table = 'exam_infos';
	public $timestamps = false;
	protected $fillable = array('sub_id', 'c_id', 'e_type', 'e_cat');

}