<?php
	
class HomeController extends Controller{

	public function HomeController() {
	}
	
	public function index($id){
        var_dump(User::find_by_name("jeroen"));

		$user = User::find_by_name("jeroen");
        echo $user->name;

		echo View::make("home/index");
	}
		
}