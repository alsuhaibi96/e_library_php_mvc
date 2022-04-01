<?php
namespace coding\app\controllers;

use coding\app\models\AUthor;

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

}
?>