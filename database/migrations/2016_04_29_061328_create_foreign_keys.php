<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id1')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id1')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id2')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id2')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id3')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id3')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id4')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id4')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id5')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id5')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id6')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id6')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id7')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id7')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id8')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id8')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id9')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id9')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id10')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id10')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id11')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id11')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id12')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id12')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id13')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id13')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('sub_id14')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('t_id14')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('attendences', function(Blueprint $table) {
			$table->foreign('c_id')->references('c_id')->on('courses')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('attendences', function(Blueprint $table) {
			$table->foreign('sub_id')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('attendences', function(Blueprint $table) {
			$table->foreign('t_id')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lectures', function(Blueprint $table) {
			$table->foreign('t_id')->references('t_id')->on('teachers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lectures', function(Blueprint $table) {
			$table->foreign('c_id')->references('c_id')->on('courses')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lectures', function(Blueprint $table) {
			$table->foreign('sub_id')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('enrollments', function(Blueprint $table) {
			$table->foreign('c_id')->references('c_id')->on('courses')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('enrollments', function(Blueprint $table) {
			$table->foreign('s_id')->references('s_id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('exam_infos', function(Blueprint $table) {
			$table->foreign('sub_id')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('exam_infos', function(Blueprint $table) {
			$table->foreign('c_id')->references('c_id')->on('courses')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('mcqs', function(Blueprint $table) {
			$table->foreign('e_id')->references('e_id')->on('exam_infos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('c_id')->references('c_id')->on('courses')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('s_id')->references('s_id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('e_id')->references('e_id')->on('exam_infos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('sub_id')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id1_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id1_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id2_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id2_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id3_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id3_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id4_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id4_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id5_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id5_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id6_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id6_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id7_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id7_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id8_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id8_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id9_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id9_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id10_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id10_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id11_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id11_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id12_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id12_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id13_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id13_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_sub_id14_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_t_id14_foreign');
		});
		Schema::table('attendences', function(Blueprint $table) {
			$table->dropForeign('attendences_c_id_foreign');
		});
		Schema::table('attendences', function(Blueprint $table) {
			$table->dropForeign('attendences_sub_id_foreign');
		});
		Schema::table('attendences', function(Blueprint $table) {
			$table->dropForeign('attendences_t_id_foreign');
		});
		Schema::table('lectures', function(Blueprint $table) {
			$table->dropForeign('lectures_t_id_foreign');
		});
		Schema::table('lectures', function(Blueprint $table) {
			$table->dropForeign('lectures_c_id_foreign');
		});
		Schema::table('lectures', function(Blueprint $table) {
			$table->dropForeign('lectures_sub_id_foreign');
		});
		Schema::table('enrollments', function(Blueprint $table) {
			$table->dropForeign('enrollments_c_id_foreign');
		});
		Schema::table('enrollments', function(Blueprint $table) {
			$table->dropForeign('enrollments_s_id_foreign');
		});
		Schema::table('exam_infos', function(Blueprint $table) {
			$table->dropForeign('exam_infos_sub_id_foreign');
		});
		Schema::table('exam_infos', function(Blueprint $table) {
			$table->dropForeign('exam_infos_c_id_foreign');
		});
		Schema::table('mcqs', function(Blueprint $table) {
			$table->dropForeign('mcqs_e_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_c_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_s_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_e_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_sub_id_foreign');
		});
	}
}