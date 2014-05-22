<?php
	
class Route{

	public static $uri = null;
	public $route = null;
	public $name = null;
	public $controller = null;
	public $method = null;
	
	public function Route(){}
	
	public static function init(){
		if(isset($_SERVER['PATH_INFO'])) {
			self::$uri = ltrim($_SERVER['PATH_INFO'], '/');
		}
	}
	
	public static function method($method, $request){
		if($method != $request){
			return;
		}
	}
	
	public static function get($route, $name, $controller, $method){
		//Request methode
		self::method("GET", $_SERVER['REQUEST_METHOD']);
		//Path
		self::init();
		
		//Route bestaat en matched
		if(self::$uri != null && self::$uri === $route){
			echo $route."<br>";
			echo $name."<br>";
			echo $controller."<br>";
			echo $method."<br>";
		}
	}
	
	public static function post($route, $name, $controller, $method){
		//Request methode
		self::method("POST", $_SERVER['REQUEST_METHOD']);
		//Path
		self::init();
		
		//Route bestaat en matched
		if(self::$uri != null && self::$uri === $route){
			echo $route."<br>";
			echo $name."<br>";
			echo $controller."<br>";
			echo $method."<br>";
		}
	}
	
	public static function put($route, $name, $controller, $method){
		//Request methode
		self::method("PUT", $_SERVER['REQUEST_METHOD']);
		//Path
		self::init();
		
		//Route bestaat en matched
		if(self::$uri != null && self::$uri === $route){
			echo $route."<br>";
			echo $name."<br>";
			echo $controller."<br>";
			echo $method."<br>";
		}
	}
	
	public static function delete($route, $name, $controller, $method){
		//Request methode
		self::method("DELETE", $_SERVER['REQUEST_METHOD']);
		//Path
		self::init();
		
		//Route bestaat en matched
		if(self::$uri != null && self::$uri === $route){
			echo $route."<br>";
			echo $name."<br>";
			echo $controller."<br>";
			echo $method."<br>";
		}
	}
	
	
}