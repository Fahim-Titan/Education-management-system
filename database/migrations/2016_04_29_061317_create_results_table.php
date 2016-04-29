<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultsTable extends Migration {

	public function up()
	{
		Schema::create('results', function(Blueprint $table) {
			$table->integer('c_id')->unsigned();
			$table->integer('s_id')->unsigned();
			$table->integer('e_id')->unsigned();
			$table->integer('sub_id')->unsigned();
			$table->float('number')->nullable()->default('0');
		});
	}

	public function down()
	{
		Schema::drop('results');
	}
}