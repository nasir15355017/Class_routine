<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','backend\MainController@index')->name('main');

Route::get('/professor/index','backend\TeacherController@index')->name('professor.index');
Route::get('/professor/add','backend\TeacherController@create')->name('professor.add');
Route::post('/professor/store','backend\TeacherController@store')->name('professor.store');

Route::get('/course/index','backend\CourseController@index')->name('course.index');
Route::get('/course/add','backend\CourseController@create')->name('course.add');
Route::post('/course/store','backend\CourseController@store')->name('course.store');

Route::get('/day/index','backend\DayController@index')->name('day.index');
Route::get('/day/add','backend\DayController@create')->name('day.add');
Route::post('/day/store','backend\DayController@store')->name('day.store');

Route::get('/room/index','backend\RoomController@index')->name('room.index');
Route::get('/room/add','backend\RoomController@create')->name('room.add');
Route::post('/room/store','backend\RoomController@store')->name('room.store');

Route::get('/time/index','backend\TimeController@index')->name('time.index');
Route::get('/time/add','backend\TimeController@create')->name('time.add');
Route::post('/time/store','backend\TimeController@store')->name('time.store');

Route::get('/section/add','backend\SectionController@create')->name('section.add');

Route::get('/daytime/add','backend\DaytimeController@create')->name('daytime.add');

Route::get('/slotroom/add','backend\SlotroomController@create')->name('slotroom.add');

Route::resource('student', 'backend\StudentController');
