<?php
 /*
 *  @ Copy Right 2018
	@ Session hendel
 */
 class Session
 {
 	


 	public static function set($key, $val){
  	$_SESSION[$key] = $val;
 	}

		 public static function get($key){
		  if (isset($_SESSION[$key])) {
		   return $_SESSION[$key];
		  } else {
		   return false;
		  }
		 }
 	 




 	  /****************
 	    @session destroy 
 	    @session unset
 	  ****************/

 	public function destroy()
 	{
 		session_destroy();
 		session_unset();
 	}

 }

?>