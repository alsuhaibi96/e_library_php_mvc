<?php
namespace coding\app\system;
class Request{


  public function getRoute(){
      return $_SERVER["REQUEST_URI"];
  }
  public function getRequestMethod(){
      return $_SERVER["REQUEST_METHOD"];
  }
/*
    public function checkRequest(){

        $url=$_SERVER['REQUEST_URI'];
        $method=$_SERVER['REQUEST_METHOD'];
       

        //Router::executeRoute($method,$url);

        
        }

*/
        
    

}
?>