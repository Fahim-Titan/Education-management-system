<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('c_id');
			$table->integer('sub_id1')->unsigned()->nullable();
			$table->integer('t_id1')->unsigned()->nullable();
			$table->integer('sub_id2')->unsigned()->nullable();
			$table->integer('t_id2')->unsigned()->nullable();
			$table->integer('sub_id3')->unsigned()->nullable();
			$table->integer('t_id3')->unsigned()->nullable();
			$table->integer('sub_id4')->unsigned()->nullable();
			$table->integer('t_id4')->unsigned()->nullable();
			$table->integer('sub_id5')->unsigned()->nullable();
			$table->integer('t_id5')->unsigned()->nullable();
			$table->integer('sub_id6')->unsigned()->nullable();
			$table->integer('t_id6')->unsigned()->nullable();
			$table->integer('sub_id7')->unsigned()->nullable();
			$table->integer('t_id7')->unsigned()->nullable();
			$table->integer('sub_id8')->unsigned()->nullable();
			$table->integer('t_id8')->unsigned()->nullable();
			$table->integer('sub_id9')->unsigned()->nullable();
			$table->integer('t_id9')->unsigned()->nullable();
			$table->integer('sub_id10')->unsigned()->nullable();
			$table->integer('t_id10')->unsigned()->nullable();
			$table->integer('sub_id11')->unsigned()->nullable();
			$table->integer('t_id11')->unsigned()->nullable();
			$table->integer('sub_id12')->unsigned()->nullable();
			$table->integer('t_id12')->unsigned()->nullable();
			$table->integer('sub_id13')->unsigned()->nullable();
			$table->integer('t_id13')->unsigned()->nullable();
			$table->integer('sub_id14')->unsigned()->nullable();
			$table->integer('t_id14')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}