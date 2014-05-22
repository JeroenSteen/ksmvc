<?php

/*
TODO:

Route::get('/', function(){
	return View::make('user/index');
});
*/


	
/*

GET:	/login
NAME:	/login
DO:		User@index

*/	

Route::get('login', 'login', 'User', 'index');