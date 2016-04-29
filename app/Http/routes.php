<?php 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View('welcome');
});

Route::get('/admin',function(){
	return View('admins');
});



//Route::resource('admin', 'AdminController');
Route::resource('teacher', 'TeacherController');
Route::resource('student', 'StudentController');
Route::resource('subject', 'SubjectController');
Route::resource('couse', 'CouseController');
Route::resource('attendence', 'AttendenceController');
Route::resource('notice', 'NoticeController');
Route::resource('routine', 'RoutineController');
Route::resource('lecture', 'LectureController');
Route::resource('enrollment', 'EnrollmentController');
Route::resource('exam_info', 'Exam_infoController');
Route::resource('mcq', 'McqController');
Route::resource('result', 'ResultController');
