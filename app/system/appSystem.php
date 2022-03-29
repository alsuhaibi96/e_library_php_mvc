<?php
namespace coding\app\system;

use Dotenv\Dotenv;

class AppSystem{
    public Request $request;
    public Response $response;
    public Router $router;
    public static AppSystem $appSystem;
    public Database $database;
    
    function __construct(array $dbConfig)
    {

        
    	$this->database=new Database($dbConfig);
        self::$appSystem=$this;
        $this->request=new Request();
        $this->response=new Response();
        $this->router=new Router($this->request);

    } 
    
    public function start(){
        $this->router->executeRoute();
        

    }
    
}

?>