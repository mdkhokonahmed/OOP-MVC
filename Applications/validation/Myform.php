<?php
/**
* Copy Right kl_mvc 
* khokon ahmed 2018
*/
class Myform 
{
	public $currentvalue = array();
	public $value = NULL;
	public $error = array();

	function __construct()
	{
		
	}


	/**
	$_post data
	*/

	public function post($key)
	{
		$this->currentvalue[$key] = preg_replace('/(?<!^)([A-Z][a-z]|(?<=[a-z])[^a-z]|(?<=[A-Z])[0-9_])/', '', $_POST[$key]);
		$this->value = $key;
		return $this;
	}

	public function error()
	{
		if (empty($this->currentvalue[$this->value])) {
			$this->currentvalue[$this->value]['empty'] = "Filed is empty";
		}
		return $this;
	}
}

?>