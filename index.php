<?php

 spl_autoload_register(function($class){
 require_once'vendor/systems/'.$class.'.php';
	 });
  $app = new Application();

 





