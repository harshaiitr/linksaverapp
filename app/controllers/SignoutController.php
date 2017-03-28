<?php
namespace link\Controllers;
use link\Models\Post;
class SignoutController extends BaseController{
	public function get(){
		
       if(isset($_COOKIE["remember_me"])) {
       	        $uname2=$_COOKIE['remember_me'];
		        Post::cookie_delete($uname2);
                setcookie ("remember_me","don't remember",time()-100,"/");
                echo "SignOut Sucessfully";

                }

       else{
               	echo "Already Signout";
                  }
              }
          }
