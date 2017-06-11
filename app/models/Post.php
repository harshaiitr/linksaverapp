<?php

namespace link\Models ;

class Post{
	public static function DB(){
                global $CONFIG;
		$link = new \PDO("mysql:dbname={$CONFIG['dbname']};host={$CONFIG['dbhost']}",$CONFIG['dbuser'],$CONFIG['dbpass']);
		
		return $link;
	}

	public static function create($uname,$pword){
		$db=self::DB();
		$query=$db->prepare('INSERT INTO login(username,password) values(:uname,:pword)');
		$result=$query->execute(['uname'=>$uname,'pword'=>sha1($pword)]);
		if(!$result){
			
			return false;
		}
		else{
			
			return true;
		}
		

	}
	public static function cookie_insert($hashcookie){
		$db=self::DB();
		$query=$db->prepare('INSERT INTO cookies(hash) values(:hash)');
		$result=$query->execute(['hash'=>$hashcookie]);
		
		}
		public static function cookie_delete($hashcookie){
			$db=self::DB();
			$query=$db->prepare('Delete * from cookies where hash=:hash');
			$result=$query->execute(['hash'=>$hashcookie]);
		}
		public static function cookiecheck($hashcookie){
		$db=self::DB();
		$query=$db->prepare('Select id FROM cookies WHERE hash=:hash ');
		$result=$query->execute(['hash'=>$hashcookie]);
		$row = $query->fetch(\PDO::FETCH_ASSOC);

	if(!$row){
			
		
		return false;
		
		}
		else{
			
			return true;}
		}

	public static function logincheck($uname,$pword){
		$db=self::DB();
		$query=$db->prepare('Select id FROM login WHERE username=:username and password=:password');
		$result=$query->execute(['username'=>$uname,'password'=>sha1($pword)]);
		$row = $query->fetch(\PDO::FETCH_ASSOC);

	if(!$row){
			
		
		return false;
		
		}
		else{
			
			session_start();
			$_SESSION['username']=$uname;
			return true;
			
			} 
			
						}            
               
	
    public static function input($input1){
		$db=self::DB();
		$query=$db->prepare('INSERT INTO form1(input1) values(:input1)');
		$result=$query->execute(['input1'=>$input1]);
		if(!$result){
			
			print_r($query->errorInfo());;
		}
		else{
			
			return true;
		}
		
		

	}
}
