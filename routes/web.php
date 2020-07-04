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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@index')->name('test');

Route::get('/luggage', 'LuggageController@index')->name('luggage');

Route::get('/list', 'ListController@index')->name('list');

Route::post('/luggage', 'LuggageController@store')->middleware('auth');

Route::get('/deliver', 'DeliverController@index')->name('deliver');

Route::get('/match', 'MatchController@index')->name('match');

Route::get('/chat', 'ChatController@index')->name('chat');

Route::post('/add', 'ChatController@add')->name('add');

Route::get('/result/ajax', 'ChatController@getData');

Route::post('/deliver', 'DeliverController@store')->name('room');

Route::post('/chat/{room_id}', 'ChatController@selectRoom')->name('select_room');

Route::get('/message-list', 'MessageListController@index')->name('message-list');

Route::get('/tutorial', 'TutorialController@index')->name('tutorial');
