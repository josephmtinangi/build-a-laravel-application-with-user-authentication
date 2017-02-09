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

// This route is only accessible by a logged in user 
Route::get('protected', ['middleware' => ['stormpath.auth'], function() {
    return 'These are all the secrets!';
}]);

// This route is only accessible by a guest
Route::get('guests', ['middleware' => ['stormpath.guest'], function() {
    return 'You are a guest!';
}]);
