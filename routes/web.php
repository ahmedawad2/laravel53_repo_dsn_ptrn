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
    return view('welcome');
});

//testing namespace grouping
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('users', 'UsersController');
    Route::get('users/added/{p}', 'UsersController@added');

    Route::resource('posts', 'PostsController');
    Route::resource('modules', 'ModulesController');

});

//using the variable instead of the static notation, remember: it's not a static calls, rather, a service location using facades.
$router->get('/h', function () {
    return 'haha';
});

//optional params has to be initialized with default value in the clousre, otherwise give an error when missing.
Route::get('/test/{p1}/{p2?}', function ($p1, $p2 = 'default') {
    print_r([$p1, $p2]);
});

//route grouping, with a prefix, and testing the root / route for the prefix
Route::group(['prefix' => 'prefix'], function () {
    Route::get('/', function () {
        return 'this is the root route for this route grouping';
    });
    Route::get('/sub', function () {
        return 'and this is prefix / sub route';
    });
});