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

Route::get('/', 'WelcomeController@index');

Route::post('members/members', 'WelcomeController@keyword')->name('keyword');

Route::get('members', 'MembersController@index')->name('members.index');

Route::get('members/koreken', 'MembersController@koreken')->name('members.koreken');
Route::get('members/shuhei', 'MembersController@shuhei')->name('members.shuhei');
Route::get('members/yuta', 'MembersController@yuta')->name('members.yuta');
Route::get('members/marina', 'MembersController@marina')->name('members.marina');
Route::get('members/kanna', 'MembersController@kanna')->name('members.kanna');
Route::get('members/minami', 'MembersController@minami')->name('members.minami');



