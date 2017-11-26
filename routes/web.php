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
use App\Mail\ContactMessageCreated;

Route::get('/test-email',function(){

	return new ContactMessageCreated('john chishugi','jkchishugi@gmail.com','Merci pour laracarte.');
});


Route::get('/',[
	'as'=>'home_path',
	'uses'=>'PagesController@home'
]);
Route::get('/about',[
	'as'=>'about_path',
	'uses'=>'PagesController@about'
]);

Route::get('/contact',[
	'as'=>'contact_path',
	'uses'=>'ContactsController@create'
]);

Route::post('/contact',[
	'as'=>'contact_path',
	'uses'=>'ContactsController@store'
]);

