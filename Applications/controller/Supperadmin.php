<?php

class Supperadmin extends KL_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		session_start();
		$userid = $_SESSION['userid'];
		if ($userid == NULL) {
			header("Location:".baseurl."/Admin/index");
		}
	}

	public function index()

	{
	$data['title'] = "Welcome To Admin";
	$this->loder->loadview('thames/home/xtmt/header', $data);
	$this->loder->loadview('thames/home/xtmt/footer');
	}


	public function logout()
	{	
		session_unset();
		session_destroy();
		header("Location:".baseurl."/Admin/index");
	}
}