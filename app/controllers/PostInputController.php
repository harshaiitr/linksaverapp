<?php

namespace link\Controllers;

use link\Models\Post;

class PostInputController extends BaseController{
    public function post(){

    	$input1=$_POST['input1'];

    	if(Post::input($input1)){
    		 echo "LINK SAVED";
    	}
        else{
        	echo "LINK NOT SAVED";
        }
    } 
}