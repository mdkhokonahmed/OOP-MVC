<?php

class Category extends KL_Controller
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

	public function managecategory()
	{
		$data['title'] = "Welcome To Category";
		$table = "`category`";
		$data['categorys'] = $this->db->select($table);
		$this->loder->loadview('thames/home/xtmt/header', $data);
		$this->loder->loadview('thames/home/cat/addcategory');
		$this->loder->loadview('thames/home/cat/categorym', $data);
		$this->loder->loadview('thames/home/xtmt/footer');
		

	}

	public function save_category()
	{
	    $gump = $this->loder->validation('GUMP');
		$input = $gump->sanitize($_POST);
		$gump->validation_rules(array(
			'categoryname' => 'required|max_len,25|min_len,6',
			'description'  => 'required',
			
			
		));

		$gump->filter_rules(array(
			'categoryname' => 'trim',
			'description' => 'trim',
		));

		$validated_data = $gump->run($input);

		if ($validated_data === false) {
		
		    $data['title'] = "Welcome To Category";
		    $table = "`category`";
			$data['categorys'] = $this->db->select($table);
			$_SESSION['message'] = "<span style='color:red'>".$gump->get_readable_errors(true)."</span>";
			header("Location:".baseurl."/Category/managecategory");
		    
		}else{
			
				$categoryname = $input['categoryname'];
				$description = $input['description'];
				$status = $input['status'];
				$data = array(
						'categoryname' => $categoryname,
						'description' => $description,
						'status' => $status
					);

				$table = "`category`";
				$insert = $this->db->query_insert($table, $data);
				if ($insert) {
				$_SESSION['message'] = '<span style="color:blue">Category Created Successfully</span>';
					header("Location:".baseurl."/Category/managecategory");
				
					
				}

			
		}
	}

	public function editcategory($catid)
	{	
		//$catid = preg_replace('/(?<!^)([A-Z][a-z]|(?<=[a-z])[^a-z]|(?<=[A-Z])[0-9_]{0-3})/', '', $catid);
		$data['title'] = "Welcome To Category";
		$table = '`category` WHERE catid = "'.$catid.'"';
		$data['categorysbyid'] = $this->db->select($table);
		$this->loder->loadview('thames/home/xtmt/header', $data);
		$this->loder->loadview('thames/home/cat/editcategory', $data);
		//$this->loder->loadview('thames/home/cat/categorym', $data);
		$this->loder->loadview('thames/home/xtmt/footer');
	}


}
