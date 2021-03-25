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

Route::get('/', function () {
    return view('toppage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//各授業一覧表示
Route::get('course', function () {
    return view('courses.course');
});

Route::get('course1', 'CourseController@campus_sort_hiyoshi')->name('course.hiyoshi');
Route::get('course2', 'CourseController@campus_sort_mita')->name('course.mita');
Route::get('course3', 'CourseController@campus_sort_sfc')->name('course.sfc');

Route::get('search', 'CourseController@match')->middleware('auth')->name('post.search');

Route::get('mypage', 'CourseController@show')->middleware('auth')->name('get.mypage');

Route::post('courses/{course}', 'CourseController@register')->name('post.register');

Route::get('todo', 'ReportController@show')->middleware('auth')->name('get.todo');

Route::post('todo/{report}', 'ReportController@add')->middleware('auth')->name('post.todo');

Route::post('add/{report}', 'ReportController@append')->middleware('auth')->name('post.add');

Route::post('complete/{report}', 'ReportController@complete')->name('post.complete');

Route::post('courses/{id}/talk', 'ChatController@show')->name('post.chat');

Route::get('courses/{id}/talk', 'ChatController@show');

Route::post('{id}/create', 'ChatController@create')->name('post.create');





