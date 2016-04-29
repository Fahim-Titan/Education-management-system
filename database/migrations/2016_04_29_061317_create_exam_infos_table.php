<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamInfosTable extends Migration {

	public function up()
	{
		Schema::create('exam_infos', function(Blueprint $table) {
			$table->increments('e_id');
			$table->integer('sub_id')->unsigned();
			$table->integer('c_id')->unsigned();
			$table->string('e_type');
			$table->string('e_cat');
		});
	}

	public function down()
	{
		Schema::drop('exam_infos');
	}
}