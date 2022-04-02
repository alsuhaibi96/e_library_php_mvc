<?php 
/**
 * Home Controller for controlling the data from the model
 * TODO:All other methods for CRUD Operations
 * 
 */
namespace coding\app\controllers;

use coding\app\models\Category;

class HomeController extends Controller{

function show(){
    $this->view('home');
    
}

// listing all data to the main menu
function listAll(){
    $categories=new Category();
    $allCategories=$categories->getAll();
    //print_r($allCategories);

    $this->view('home',$allCategories);

}

}


?>