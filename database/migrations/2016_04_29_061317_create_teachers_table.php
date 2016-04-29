<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	public function up()
	{
		Schema::create('teachers', function(Blueprint $table) {
			$table->increments('t_id');
			$table->string('name', 50);
			$table->string('gender', 10);
			$table->string('blood_type', 10)->nullable();
			$table->string('email', 50)->unique();
			$table->date('dob');
			$table->string('phone_number', 20)->nullable();
			$table->string('address', 200)->nullable();
			$table->string('image', 200)->nullable();
			$table->string('qualification', 200)->nullable();
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('teachers');
	}
}