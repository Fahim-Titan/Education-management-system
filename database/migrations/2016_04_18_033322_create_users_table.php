<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 
		 Schema::create('users', function(blueprint $table){
            $table ->increments('user_id');
            $table ->string('full_name',25);
            $table -> string('username')->unique();
            $table ->string('gender');
            $table ->string('email')->unique();
            $table ->date('dob');
            $table ->string('phone_number',15);
            $table ->string('address');
            $table ->string('blood_type');
            $table ->string('image_path');
            $table ->string('label');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('users');
    }
}
