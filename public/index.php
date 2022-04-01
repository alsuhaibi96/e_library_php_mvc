<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\BooksController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\DashboardController;
use coding\app\controllers\HomeController;
use coding\app\controllers\CartController;
use coding\app\controllers\PaymentController;
use coding\app\controllers\CitiesController;
use coding\app\controllers\OffersController;




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
Router::get('/cart',[CartController::class,'show']);
Router::get('/categories',[CategoriesController::class,'show']);
Router::get('/payment',[PaymentController::class,'show']);



/**
 * Dashboard operations
 */

/**
 * show dashboard views and list data
 */
Router::get('/',[HomeController::class,'show']);
Router::get('/dashboard',[DashboardController::class,'show']);
Router::get('/add_book',[BooksController::class,'show']);
Router::get('/list_books',[BooksController::class,'listAll']);
Router::get('/categories_list',[CategoriesController::class,'listAll']);
Router::get('/list_authors',[AuthorsController::class,'listAll']);
Router::get('/list_publisher',[PublishersController::class,'listAll']);
Router::get('/list_user',[UsersController::class,'listAll']);
Router::get('/list_city',[CitiesController::class,'listAll']);
Router::get('/list_offer',[OffersController::class,'listAll']);








/** Add dashboard values to views
 * 
 */
Router::get('/newUser',[UsersController::class,'newUser']);
Router::get('/add_author',[AuthorsController::class,'show_author']);
Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/add_publisher',[PublishersController::class,'show']);
Router::get('/add_city',[CitiesController::class,'show']);
Router::get('/add_offer',[OffersController::class,'show']);






/** web post (add and save) routes  */
Router::post('/save_book',[BooksController::class,'store']);
Router::post('/save_author',[AuthorsController::class,'store']);
Router::get('/edit_category/{id}',[CategoriesController::class,'edit']);
Router::get('/remove_category',[CategoriesController::class,'remove']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::post('/save_publisher',[PublishersController::class,'store']);
Router::post('/save_user',[UsersController::class,'saveUser']);
Router::post('/save_city',[CitiesController::class,'store']);
Router::post('/save_offer',[OffersController::class,'store']);



/**
 * Update
 * 
 */
Router::post('/update_category',[CategoriesController::class,'update']);

/** end of web routes */



$system->start();

