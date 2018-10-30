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

/*Route::get('/', function () {
    $tasks = DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('send', 'MailController@send');


/*
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user ' .$name.' with an id of ' .$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');