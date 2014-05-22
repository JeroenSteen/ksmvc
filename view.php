<?php
	
class View{
	
	public static $view = null;
    public $data = null;

	private function View(){}
	
	public static function & instance() {
        return self::$view;
    }
	
	public static function make($view, $data = array()){
		//View
		if(is_null(self::$view)) {
			self::$view = new View;
		}
		self::$view->view = $view;
		
		//Data
		extract($data);
        self::$view->data = $data;
		
		require(APP."/views/".$view.".php");
	}
	
}