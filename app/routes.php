<?php

/*

GET:	/login
NAME:	/login
DO:		User@index

*/

/*Route::get('/', function(){
	return View::make('user/index');
});*/

Route::get('login', 'login', 'User', 'index');