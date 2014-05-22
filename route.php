<?php
	
class Route{

	public static $uri = null;
	public $route = null;
	public $name = null;
	public $controller = null;
	public $method = null;
	
	public function Route(){}
	
	//Check of method matched met request method
	public static function method($method, $request){
		if($method != $request){
			return;
		}
	}
	
	//Voeg uri toe aan route
	public static function init(){
		if(isset($_SERVER['PATH_INFO'])) {
			self::$uri = ltrim($_SERVER['PATH_INFO'], '/');
		}
	}
	
	//Launch de controller
	public static function launch($route, $name, $controller, $method){
		//Route bestaat en matched
		if(self::$uri != null && self::$uri === $route){

			
			Controller::launch("/".$controller."/".$method);
		}
	}
	
	public static function get($route, $name, $controller, $method){
		//Request methode
		self::method("GET", $_SERVER['REQUEST_METHOD']);
		//Path
		self::init();
		//Launch
		self::launch($route, $name, $controller, $method);
	}
	
	public static function post($route, $name, $controller, $method){
		//Request methode
		self::method("POST", $_SERVER['REQUEST_METHOD']);
		//Path
		self::init();
		//Launch
		self::launch($route, $name, $controller, $method);
	}
	
	public static function put($route, $name, $controller, $method){
		//Request methode
		self::method("PUT", $_SERVER['REQUEST_METHOD']);
		//Path
		self::init();
		//Launch
		self::launch($route, $name, $controller, $method);
	}
	
	public static function delete($route, $name, $controller, $method){
		//Request methode
		self::method("DELETE", $_SERVER['REQUEST_METHOD']);
		//Path
		self::init();
		//Launch
		self::launch($route, $name, $controller, $method);
	}
	
	
}