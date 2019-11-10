<?php
/**
   @Copy Right Kl_controller 2018
*  @KL_Controller Main Controller
   @Main Controller load 
   @Views load or Object
   @Database Load or object
   @khokon ahmed.... 
*/

class KL_Controller
{
	protected $loder = array();
	protected $db = array();
	


	public function __construct()
	{
		$this->loder = new Loder_views();
		$this->db = new Mysqli_Database();
		
		
	}

	
}
?>