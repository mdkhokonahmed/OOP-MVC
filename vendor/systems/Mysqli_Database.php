<?php
  /***
    @Copy Right mysqli Database 2018
    @khokon ahmed
  ***/
 
 class Mysqli_Database
 {	

 	public $connect;
 	public $error;

 	public function __construct()
 	{
 		$this->connect = new mysqli("localhost", "root", "", "db_klmvc");
 		if (!$this->connect) {
 			$this->error = "Connection fail".$this->connect->connect_error();
 			return false;
 		}
 	}


 	/*****************************/
 	/* Read Data With for Database */
 	/******************************/

 	public function check_exits($TableName)
 	{	 
        error_reporting(0);
 		  $result = $this->connect->query("SELECT * FROM" .$TableName) or die($this->connect->error.__LINE__);
    
     if ($result->num_rows > 0) {
          $index = 0;
          while ($row = $result->fetch_object()) {
              $rows[$index] = $row; 
            } 
             return $rows;   
        }else{
            return false;
        }	
    	}



      public function select($table,$column = "",$orderby = "",$limit = "")
    {
        if($column == "")
            $column='*';
        if($orderby == "")
            $orderby = 'NULL';
        if($limit != "")
        {
            $limit = "LIMIT ".$limit;
        }
        $result = $this->connect->query("SELECT ".$column." FROM ".$table." ORDER BY ".$orderby."".$limit."");
        if($result != false)
        {
           while ($row = $result->fetch_object()) {
              $rows[] = $row; 
            } 
             return $rows;  
        }
        else
        {
           
            return false;
        }
    }

    /********************** Method Chaning with Database *********************/

    public function select_data($table)
    {
      
    }


    


  /********************************/
  /* insert data With for Database */
  /***********************************/

  public function query_insert($table, $data)
  {
     $key = array();
    $values = array();
    foreach ($data as $kolom => $value)
           {
        $key[] = $kolom;
        $values[] = $value;
    }
     $key = implode("," ,$key);
     $values = implode("','", $values);

    $insert_row = $this->connect->query("INSERT INTO ". $table ."($key) VALUES ('$values')") or die($this->connect->error.__LINE__);
    if ($insert_row) {
      return $insert_row;
    }else{
        return false;
    }  
  }

 /**********************************/
  /* Update data With for Database */
  /***********************************/
 public function update($table, $data, $cont){
        $upkeys = NULL;
     foreach ($data as $key => $value) {
        $upkeys .= "$key = '$value',";
     }
     $upkeys = rtrim($upkeys, ",");
    $updated_row = $this->connect->query("UPDATE " .$table. " SET " .$upkeys. " WHERE " .$cont) or die($this->connect->error.__LINE__);
    if ($updated_row) {
        return $updated_row;
    }else{
        return false;
    }

 }

    /**********************************/
  /* Detete data With for Database */
  /***********************************/
 public function deleted($table, $cont, $limit = 1){ 
    $deleted_row = $this->connect->query("DELETE FROM " .$table." WHERE " .$cont. " Limit " .$limit) or die($this->connect->error.__LINE__);
    if ($deleted_row) {
       return $deleted_row;
    }else{
       return false;
    }
}

 }

?>