<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('s_id');
			$table->string('name', 50);
			$table->string('gender', 10);
			$table->string('blood_type', 10)->nullable();
			$table->string('email', 50)->unique();
			$table->date('dob');
			$table->string('phone_number', 20)->nullable();
			$table->string('address', 100);
			$table->string('image', 200)->nullable();
			$table->string('father_name', 50)->nullable();
			$table->string('mother_name', 50)->nullable();
			$table->string('gurdian_phone_number', 20)->nullable();
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}