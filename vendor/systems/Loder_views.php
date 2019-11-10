<?php
/***
 @Copy Right Loder 2018
 @view Loder
 @from loder
 @khokon ahmed 
***/

class Loder_views
{
	
	public function loadview($fileName, $data = false)
	{
	
	 if ($data == true) {
 	  	extract($data);
 	  	}
 	  if (is_file('Applications/view/'.$fileName.'.php')) {
 	  		require_once 'Applications/view/'.$fileName.'.php';
 	  	}		
	}


	public function validation($fromName)
	{	
		if (is_file('Applications/validation/'.$fromName.'.php')) {
			require_once 'Applications/validation/'.$fromName.'.php';
			 return new $fromName();
		}
		
	}

	






}