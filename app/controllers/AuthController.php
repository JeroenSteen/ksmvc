<?php
	
class AuthController extends Controller{

	public function AuthController() {
	}
	
	public function index(){	
		echo View::make("auth/login");
	}
	
	public function register(){	
		echo View::make("auth/register");
	}
	
	public function forgot_pass(){	
		echo View::make("auth/forgot-password");
	}
	
	public function forgot_pass_confirm(){	
		echo View::make("auth/forgot-password-confirm");
	}
	
}