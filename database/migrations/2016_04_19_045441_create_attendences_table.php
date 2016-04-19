<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('attendences',function(blueprint $table){
            $table->increments('att_id');
            $table->integer('sub_id')->unsigned();
            $table->integer('t_id')->unsigned();
            $table->date('date');
            $table->boolean('attend')->default(true);
        });
        Schema::table('attendences',function($table){
            $table->foreign('sub_id')->references('sub_id')->on('subjects');
            $table->foreign('t_id')->references('t_id')->on('teachers');
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
        Schema::drop('attendences');
    }
}
