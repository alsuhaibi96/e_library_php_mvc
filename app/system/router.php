<?php 
namespace coding\app\system;
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


    public  function executeRoute(){
     
       
        $route=$this->request->getRoute();
        $method=$this->request->getRequestMethod();
        $callback=self::$routes[$method][$route];

        
        
        
            if(isset($callback))
            {
                if(is_array($callback))
                {
                    $callback[0]=new $callback[0];
                }

                call_user_func($callback);
            }
            else {
                echo "page not found";
            }



        
    



    }

    public function view($v,$params){

        require_once __DIR__."/../views/$v.php";

    }
 

}
?>