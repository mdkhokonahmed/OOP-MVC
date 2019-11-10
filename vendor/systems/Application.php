<?php
/**
    @Copy Right with Kl_controller with 2018....
    @ With khokon ahmed 
    @ main function with url,
    @ Any With Controller Strlower 
    @ Any Method load 
    @ Any parem load 
    @ baseurl load 
    @ not Copy any person .....With khokon ahmed
**/

require_once 'Applications/config/config.php';

class Application
{
    public $url;// Url set
    public $controllerName = "Admin";  //Home Controller Load
    public $methodName = "index";  // Home Method Load
    public $controllerPath = "Applications/controller/"; // Home Controller Path
    public $controller; // Controllers
    public function __construct(){
        $this->get_urls(); // url function
        $this->controller_lods(); // controller load file  load
        $this->method_lods();  // method load or parem load 
    }

    public function get_urls(){
    $this->url = isset($_GET['url']) ? $_GET['url'] :NULL;
    if (isset($this->url)) {
        $this->url = rtrim($this->url, '/');
        $this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL));
     }else{
        unset($this->url);
   }
    }

    public function controller_lods(){
        if (!isset($this->url[0])) {
         require_once $this->controllerPath.$this->controllerName.".php";
         $this->controller = new $this->controllerName();
        }else{
            $this->controllerName = $this->url[0];
            $fileName = $this->controllerPath.$this->controllerName.".php";
            if (file_exists($fileName)) {
                require_once $fileName;
              if (class_exists($this->controllerName)) {
                  $this->controller = new $this->controllerName();
                }else{
                    header("location:".baseurl."/Extacontroller");
                }   
            }else{
                header("location:".baseurl."/Extacontroller");
            }
        }
    }

    public function method_lods(){
        if (isset($this->url[2])) {
         $this->methodName = $this->url[1];
         if (method_exists($this->controller, $this->methodName)) {
         $this->controller->{$this->methodName}($this->url[2]);
         }else{
            header("location:".baseurl."/Extacontroller");
         }

        }else{
            if (isset($this->url[1])) {
         $this->methodName = $this->url[1];
         if (method_exists($this->controller, $this->methodName)) {
         $this->controller->{$this->methodName}();
         }else{
            header("location:".baseurl."/Extacontroller");
         }
        }else{
            if (method_exists($this->controller, $this->methodName)) {
             $this->controller->{$this->methodName}();
         }else{
            header("location:".baseurl."/Extacontroller");
         }
        }
    }          
}




}

