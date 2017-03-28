<?php

namespace link\Controllers;
use link\Models\Post;

class LoginController extends BaseController{
	public function get(){
		session_start();
		$uname1=$_COOKIE['remember_me'];
		if(Post::cookiecheck($uname1)){
			$this->render('input.html');
			
		}
		else{
			$this->render('Login.html');
		}
		
	}
	
	}
	