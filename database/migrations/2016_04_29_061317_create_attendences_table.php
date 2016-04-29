<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendencesTable extends Migration {

	public function up()
	{
		Schema::create('attendences', function(Blueprint $table) {
			$table->integer('c_id')->unsigned();
			$table->integer('sub_id')->unsigned();
			$table->integer('t_id')->unsigned();
			$table->boolean('attend');
			$table->date('date');
		});
	}

	public function down()
	{
		Schema::drop('attendences');
	}
}