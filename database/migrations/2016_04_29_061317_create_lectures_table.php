<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLecturesTable extends Migration {

	public function up()
	{
		Schema::create('lectures', function(Blueprint $table) {
			$table->integer('t_id')->unsigned();
			$table->integer('c_id')->unsigned();
			$table->integer('sub_id')->unsigned();
			$table->string('file');
		});
	}

	public function down()
	{
		Schema::drop('lectures');
	}
}