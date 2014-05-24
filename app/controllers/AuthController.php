<?php
	
class AuthController extends Controller{

    //public $model = User;

	public function AuthController() {
	}
	
	public function index(){
        echo View::make("auth/login");
        echo Validator::email("joseph@detephon.com.nl");
	}

    public function login(){

        if(Input::all() != null){
            $erule = User::$rules["email"];
            echo Validator::$erule(Input::all()["email"]);
            exit();
        }

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