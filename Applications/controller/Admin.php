<?php
error_reporting(0);
class Admin extends KL_Controller
{
	public function __construct()
	{
		parent::__construct();
		session_start();
		$userid = $_SESSION['userid'];
		if ($userid != NULL) {
		header("Location:".baseurl."/Supperadmin/index");
		}
	}

	public function index()
	{
		$this->login();
	}
	public function login()
	{
	 $data['title'] = "Welcome to Login";
	 $this->loder->loadview('thames/login', $data);
	}


	public function check_login()
	{
		$gump = $this->loder->validation('GUMP');
		$input = $gump->sanitize($_POST);
		$gump->validation_rules(array(
			'username'       => 'required',
			'password'    => 'required|max_len,25|min_len,6'
		));

		$gump->filter_rules(array(
			'username'    => 'trim',
			'password' => 'trim'
			
		));

		$validated_data = $gump->run($input);

		if($validated_data === false) {
		 $data['title'] = "Welcome to Login";
		 $_SESSION['message'] = $gump->get_readable_errors(true);
		 header("Location:".baseurl."/Admin/index");
		 
		} else {
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				 $username = $input['username'];
				 $password = $input['password'];
				
				 $username  = mysqli_real_escape_string($this->db->connect, $username);
	  			 $password  = md5(mysqli_real_escape_string($this->db->connect, $password));

				 $data = array(
			      	'username'    => $username,
			      	'password' => $password
			      	);

				 $table = '`user` WHERE username = "'.$username.'" AND password = "'.$password.'"';
				 $result = $this->db->check_exits($table, $data);
				  if ($result != false) {
				  		session_start();
				 	 $_SESSION['userid'] = 'userid';
				 	 $_SESSION['username'] =  $username;
				 	header("Location:".baseurl."/Supperadmin/index");
			 }else{
			 	$data['title'] = "Welcome to Login";
			 	$data['msg'] = "Email And Password Not much !!!!";
			 	$this->loder->loadview('thames/login', $data);
			 }
			 
		}	
		}
		


	}
}
?>