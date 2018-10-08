<?php

	class Token {

		public static function generateToken($session_id){

			$_SESSION['token'] = sha1($session_id);
			
		}
		public static function checkToken($token){
			
			if(isset($_SESSION['token']) && $token === $_SESSION['token']){
				unset($_SESSION['token']);
				return true;
			}
			else{
				return false;
			}
		}
	}
?>
