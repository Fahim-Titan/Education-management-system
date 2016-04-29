<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMcqsTable extends Migration {

	public function up()
	{
		Schema::create('mcqs', function(Blueprint $table) {
			$table->integer('e_id')->unsigned();
			$table->string('e_qs')->nullable();
			$table->string('image')->nullable();
			$table->string('opt_1')->nullable();
			$table->string('opt_2')->nullable();
			$table->string('opt_3')->nullable();
			$table->string('opt_4')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('mcqs');
	}
}