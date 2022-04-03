<?php
namespace coding\app\controllers;

use coding\app\models\AUthor;
use coding\app\models\Model;


    class AuthorsController extends Controller{

    public function store(){
        $author=new AUthor();
        $author->name=$_POST['name'];
        $author->phone=$_POST['phoneNumber'];
        $author->bio=$_POST['bio'];
        $author->email=$_POST['email'];
        $author->created_by=1;
        $author->is_active=1;
       if ($author->save()){

        $this->view('feedback',['success'=>'data inserted successful']);
       }
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    
}
    
 
 //View authors
 public function show_author(){
    $this->view('dashboard/add_author');

}

/**
 * Show all authors from the database
 */
function listAll(){

    /**
     * Create an instance form author model
     */
        $author =new AUthor();
        /**
         * access the getAll function from the base model ,
         * and fetch all the data from the specified table
         */
        $authors=$author->getAll();
        
        /** now show the view with the exited data */
        $this->view('dashboard/list_author',$authors);    
    
    }

// showing the author by its id 
    function showAuthorById($params=[]){
        $authors = new AUthor();
        $rows = $authors->getSingleRow($params['id']);
        $this->view('edit_author', $rows);
    }

    //updating the author
    function updateAuthor(){
        $author = new Model();
        $id = $_POST['authorid'];
        $name = $_POST['author_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];
        $stmt = $author->update('authors', [
            'name'      => $name,
            'phone'     => $phone,
            'email'     => $email,
            'bio'       => $bio
        ])->where('id', $id)->exec();
        if($stmt){ 
          
           
                $this->view('feedback',['success'=>'تم تعديل البيانات بنجاح']);
         
        }
        $this->view('dashboard/list_author');
    }
}
?>