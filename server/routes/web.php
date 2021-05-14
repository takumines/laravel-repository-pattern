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

//Route::get('/sample', 'SampleController@index');
//Route::get('/', 'BookListController@index');


use App\User;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index');
Route::post('posts', 'PostController@store');
Route::post('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@destroy');

Route::get('user_search', function() {
    $users = User::search('takumi')->get();
    foreach ($users as $user) {
        echo '<li>' . $user->name . '</li>';
    }
});
