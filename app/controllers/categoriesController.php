<?php
/**
 * Category class
 * TODO:All methods that control the model of the categories
 * 
 */
namespace coding\app\controllers;

use coding\app\models\Category;

class CategoriesController extends Controller{


    /**
     * Show method that renders the view 
     */
function show(){
    $this->view('category');

}


    /**
     * Show method that return the view data
     */
    function listAll(){
        $categories=new Category();
        $allCategories=$categories->getAll();
        //print_r($allCategories);

        $this->view('dashboard/list_categories',$allCategories);

    }
//Dashbaord add category section
    function create(){
        $this->view('dashboard/add_category');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
        $category=new Category();
        
        $category->name=$_POST['category_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=isset($_POST['is_active'])?1:0;

        $category->save();
       


    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }


   

    




}

?>