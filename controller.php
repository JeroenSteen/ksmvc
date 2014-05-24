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
        $parts = explode('/', $parts); //URI opsplitsen
		
		//Controller
        $controller = array_shift($parts); //Pak Controller
		$controller = ucfirst($controller).'Controller'; //Maak naam
		if(class_exists($controller)) { //Als Class bestaat
            $controller = new $controller; //Maak nieuwe Controller
        }
		
		//Methode
		if(isset($parts[0])) { //Methode aangegeven
            $method = array_shift($parts); //Set Methode
        } else {
            $method = 'index'; //Pak default Methode
		}

        //Argument
        $arguments = $parts; //Set Argumenten
        if(method_exists($controller, $method)) { //Bestaat Methode in Controller
            //Roep methode aan met Argumenten
            return call_user_func_array(array($controller, $method), $arguments);
		} else if(method_exists($controller, "index")) {
			return $controller->index(); //Pak default Methode
		}

	}
	
}