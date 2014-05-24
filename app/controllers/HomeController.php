<?php
	
class HomeController extends Controller{

	public function HomeController() {
	}
	
	public function index($id){
        echo $id;
		echo View::make("home/index");
	}
		
}