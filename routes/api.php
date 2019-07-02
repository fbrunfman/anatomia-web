<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', 'AuthController@login')->name('login');
Route::middleware('auth:api')->post('/logout', 'AuthController@logout');

Route::get('/lessons', 'LessonController@index');
Route::get('/chapters', 'ChapterController@index');
Route::get('/screens', 'ScreenController@index');

