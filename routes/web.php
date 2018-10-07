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

Route::get('/', 'PagesController@home');

// Route::get('/', function () {
// 	$tasks = [
// 		'1task','2task','3task'
// 	];
//     return view('welcome',[
//     	'tasks' => $tasks
//     ]);
// });


Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/projects', 'ProjectsController@index');