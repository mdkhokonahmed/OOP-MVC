<?php
 /*
 * @Copy Right with Kl_controller with 2018....
 	@With khokon ahmed 
 */
 class Extacontroller extends KL_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->loder->loadview('thames/errors/error');
 	}
 }
?>