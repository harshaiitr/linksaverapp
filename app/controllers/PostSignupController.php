<?php

namespace link\Controllers;

use link\Models\Post;

class PostSignupController extends BaseController{
    public function post(){
    	$uname=$_POST['username'];
    	$pword=$_POST['password'];
    	if(Post::create($uname,$pword)){
    		 	$this->render('input.html',['msg'=>"SIGNUP SUCESSFULLY"]);

    	


    }
    else{
    	echo "SIGNUP FAILED";
    }
    
    	
    } 
}