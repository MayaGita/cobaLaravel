<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
// 	$nama = 'Haruto';
//     return view('about',['nama' => $nama]);
// });


//menampilkan view melalui controller method

Route::get('/', 'App\Http\Controllers\AuthController@login');
Route::POST('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

Route::get('/home', 'App\Http\Controllers\PagesController@home');



Route::get('/about', 'App\Http\Controllers\PagesController@about'); 


//students
// Route::get('/students', 'App\Http\Controllers\StudentsController@index');
// Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');
// Route::get('/students/{student}', 'App\Http\Controllers\StudentsController@show');
// Route::POST('/students', 'App\Http\Controllers\StudentsController@store');
// Route::delete('/students/{student}', 'App\Http\Controllers\StudentsController@destroy');
// Route::get('/students/edit/{student}', 'App\Http\Controllers\StudentsController@edit');
// Route::patch('/students/{student}',  'App\Http\Controllers\StudentsController@update' );
Route::resource('students' ,  'App\Http\Controllers\StudentsController');