<?php
	
class HomeController extends Controller{

	public function HomeController() {
	}
	
	public function index($id){
		/*$user = User::find_by_name("jeroen");
        var_dump($user);

        echo $user->name;*/
        dd(User::find(1)->toArray());

		echo View::make("home/index");
	}
		
}