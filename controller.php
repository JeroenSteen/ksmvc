<?php
	
class Controller{

	public $controller;
    public $method;
    public $args = array();
	public $restful;
	
	public function Controller() {		
		include("view.php");
	}
	
	public static function launch($uri = ""){
        $parts = trim($uri, '/'); //Verwijder laatste slash	
        $parts = explode('/', $parts); //URI opsplitsen met slashes
		
		//Controller
        $controller = array_shift($parts); //Eerste deel, CONTROLLER
		$controller = ucfirst($controller).'Controller'; // Naam
		//include(APP."controllers/".$controller.".php");
		if(class_exists($controller)) { //Bestaat Class check
            $controller = new $controller; //Nieuwe Controller
        }
		
		//Methode
		if(isset($parts[0])) { //Als er een methode is; Tweede deel, CONTROLLER METHODE
            $method = array_shift($parts); //Set de methode
        } else {
            $method = 'index'; //Anders default methode
		}
        $arguments = $parts; //Set de argumenten
        if(method_exists($controller, $method)) { //Check of Methode bestaat in Controller
            //Methode aanroepen, argumenten arraygiving the args array
            return call_user_func_array(array($controller, $method), $arguments);
		} else if(method_exists($controller, "index")) {
			return $controller->index();
		}
	}
	
}