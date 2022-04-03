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
        if ($category->save()){

            $this->view('feedback',['success'=>'data inserted successful']);
           }
            else 
            $this->view('feedback',['danger'=>'can not add data']);
    
       


    }

     //edit method
    function edit($params=[]){

        $cat=new Category();
        $result=$cat->getSingleRow($params['id']);
        $this->view('dashboard/edit_category',$result);
        

    }

    //update categories
    function update(){

        $cat = new Category();
        $name = $_POST['category_name'];
        $imageName=$this->uploadFile($_FILES['image']);
        $image=$imageName!=null?$imageName:"default.png";
        $stmt = $author->update('categories', [
            'name'      => $name,
            'phone'     => $phone,
            'email'     => $email,
            'bio'       => $bio
        ])->where('id', $id)->exec();
        if($stmt){ ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-success'>Updated successfully</div>";
                $this->redirectHome($mes, 'dashboard/list_cateories', 10); 
            echo "</div>";
        }
        $this->view('dashboard/list_cateories');

    }
    public function remove(){

    }


   

    




}

?>