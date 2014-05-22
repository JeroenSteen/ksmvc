<?php
	
class UserController extends Controller{

	public function UserController() {
	}
	
	public function index(){
		$data["test"] = 0;
		$data['products'] = ["banaan", "kaas"];
			
		echo View::make("user/index", $data);
	}
	
	public function bla(){
		
	}
	
	
}