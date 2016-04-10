<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('admin',function(Blueprint $table){
           $table->increments('a_id');
            $table->integer('u_id')->unsigned()->nullable();

        });

        Schema::table('admin',function($table){
            $table->foreign('u_id')->references('id')->on('user')->onDelete('cascade');
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
        Schema::drop('admin');
    }
}
