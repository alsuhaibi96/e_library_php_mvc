<?php 
namespace coding\app\system;

use coding\app\controllers\CustomPagesController;

class Router{

    public $request;
    public $response;
    public function __construct($request)
    {
        $this->request=$request;
        
    }



    protected  static $routes=array(); 

    public static function get($url,$callback){
        self::$routes['GET'][$url]=$callback;



    }
    public static function post($url,$callback){
        self::$routes['POST'][$url]=$callback;


    }
    public function put(){

    }
    public function delete(){

    }


   
    function resolveRoute(){
        $route_parameters=array();
        $route=$this->request->getRoute();
        $method=$this->request->getRequestMethod();
      
       if(in_array($route,array_keys(self::$routes[$method])))
       return array(self::$routes[$method][$route],$route_parameters);
       
       foreach(self::$routes[$method] as $key=>$value){
            
            $paramsCount=preg_match_all('/{(.*?)}/', $key,$params);
            
            if($paramsCount>0){
                
                $route_parts=explode('/', $route);
               $route_path="";
               $values=array();
               for($i=0;$i<sizeof($route_parts);$i++){
                if($i<sizeof($route_parts)-$paramsCount){
                 $route_path.=$route_parts[$i]."/";
                }
                else{
                 $values[]=$route_parts[$i];
                }
             }
          
             if($route_path.implode('/',$params[0])!=$key)
             continue;   
             

             $route_parameters=array_combine($params[1],$values);

             return array($value,$route_parameters);

              

        }

    }
}

   


    public  function executeRoute(){
     
       
      

        $routsResolved=$this->resolveRoute();
      
        $callback=$routsResolved[0]?? null;
        $parameters=$routsResolved[1]??null;
            if(isset($callback) && $callback!=null)
            {
                if(is_array($callback))
                {
                    $callback[0]=new $callback[0];
                }

                call_user_func($callback,$parameters);
            }
            else {
                $error=new CustomPagesController();
                call_user_func([$error,'notFound']);
                
            }



        
    



    }

    public function view($v,$params){

        require_once __DIR__."/../views/$v.php";

    }
 

}
