<?php

namespace link\Controllers;

use link\Models\Post;

class PostLoginController extends BaseController{
    public function post(){
    	$uname=$_POST['username'];
    	$pword=$_POST['password'];
    	session_start();    
        echo $_POST['remember'];
          
    	if(Post::logincheck($uname,$pword)){
    	
    		
    		$this->render('input.html',['msg'=>"LOGIN SUCESSFULLY"]);
            if($_POST['remember']=="on") {
                $random=openssl_random_pseudo_bytes(32);
                setcookie ("remember_me",$random,time()+ (10 * 365 * 24 * 60 * 60),"/");
                Post::cookie_insert($random);

                

                            } 
            elseif(!$_POST['remember']) {
                if(isset($_COOKIE["remember_me"])) {
                    setcookie ("remember_me","don't remember",time()-100);}
    	}
    }
    	else{ 
        echo "LOGIN IS INVALID ";
        
    		 



    }
   
    	
    
    
    	
    } 
}