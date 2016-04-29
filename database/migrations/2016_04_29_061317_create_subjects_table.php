<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectsTable extends Migration {

	public function up()
	{
		Schema::create('subjects', function(Blueprint $table) {
			$table->increments('sub_id');
			$table->string('textbook_name', 100)->nullable();
			$table->string('sub_name', 50);
			$table->integer('credit')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('subjects');
	}
}