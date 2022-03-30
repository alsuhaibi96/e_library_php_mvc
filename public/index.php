<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\DashboardController;
use coding\app\controllers\HomeController;
use coding\app\controllers\CartController;
use coding\app\controllers\PaymentController;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);


/** Show routes  */
Router::get('/newUser',[UsersController::class,'newUser']);
Router::get('/cart',[CartController::class,'show']);
Router::get('/dashboard',[DashboardController::class,'show']);
Router::get('/',[HomeController::class,'show']);
Router::get('/categories',[CategoriesController::class,'show']);
Router::get('/payment',[PaymentController::class,'show']);







/** web routes  */


Router::get('/categories_list',[CategoriesController::class,'listAll']);
Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/edit_category/{id}',[CategoriesController::class,'edit']);
Router::get('/remove_category',[CategoriesController::class,'remove']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::post('/update_category',[CategoriesController::class,'update']);

/** end of web routes */



$system->start();

