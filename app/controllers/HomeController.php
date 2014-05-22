<?php
	
class HomeController extends Controller{

	public function HomeController() {
	}
	
	public function index(){	
		echo View::make("home/index");
	}
		
}