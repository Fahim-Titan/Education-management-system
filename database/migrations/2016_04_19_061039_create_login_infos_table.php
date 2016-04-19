<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('login_infos',function(blueprint $table){
            $table->increments('login_id');
            $table->integer('user_id')->unsigned();
            $table->string('username');
            $table->string('password')->unique();
        });
        Schema::table('login_infos',function($table){
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('username')->references('username')->on('users');
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
        Schema::drop('login_infos');
    }
}
