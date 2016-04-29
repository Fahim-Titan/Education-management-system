<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoutinesTable extends Migration {

	public function up()
	{
		Schema::create('routines', function(Blueprint $table) {
			$table->integer('r_id', true);
			$table->string('r_data')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('routines');
	}
}