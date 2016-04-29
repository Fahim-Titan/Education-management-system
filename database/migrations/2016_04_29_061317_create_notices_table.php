<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticesTable extends Migration {

	public function up()
	{
		Schema::create('notices', function(Blueprint $table) {
			$table->integer('n_id', true);
			$table->string('n_data')->nullable();
			$table->date('date');
		});
	}

	public function down()
	{
		Schema::drop('notices');
	}
}