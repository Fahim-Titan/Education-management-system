<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('courses', function(blueprint $table){
             $table->increments('c_id');

            ## creating 14 columns for subjects
            $table ->integer('sub_id1')->unsigned()->nullable();
            $table ->integer('sub_id2')->unsigned()->nullable();
            $table ->integer('sub_id3')->unsigned()->nullable();
            $table ->integer('sub_id4')->unsigned()->nullable();
            $table ->integer('sub_id5')->unsigned()->nullable();
            $table ->integer('sub_id6')->unsigned()->nullable();
            $table ->integer('sub_id7')->unsigned()->nullable();
            $table ->integer('sub_id8')->unsigned()->nullable();
            $table ->integer('sub_id9')->unsigned()->nullable();
            $table ->integer('sub_id10')->unsigned()->nullable();
            $table ->integer('sub_id11')->unsigned()->nullable();
            $table ->integer('sub_id12')->unsigned()->nullable();
            $table ->integer('sub_id13')->unsigned()->nullable();
            $table ->integer('sub_id14')->unsigned()->nullable();;
        });

        Schema::table('courses',function($table){
            $table->foreign('sub_id1')->references('sub_id')->on('subjects');
            $table->foreign('sub_id2')->references('sub_id')->on('subjects');
            $table->foreign('sub_id3')->references('sub_id')->on('subjects');
            $table->foreign('sub_id4')->references('sub_id')->on('subjects');
            $table->foreign('sub_id5')->references('sub_id')->on('subjects');
            $table->foreign('sub_id6')->references('sub_id')->on('subjects');
            $table->foreign('sub_id7')->references('sub_id')->on('subjects');
            $table->foreign('sub_id8')->references('sub_id')->on('subjects');
            $table->foreign('sub_id9')->references('sub_id')->on('subjects');
            $table->foreign('sub_id10')->references('sub_id')->on('subjects');
            $table->foreign('sub_id11')->references('sub_id')->on('subjects');
            $table->foreign('sub_id12')->references('sub_id')->on('subjects');
            $table->foreign('sub_id13')->references('sub_id')->on('subjects');
            $table->foreign('sub_id14')->references('sub_id')->on('subjects');
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
        Schema::drop('courses');
    }
}
