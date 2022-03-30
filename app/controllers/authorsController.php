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
    
    //View all list of authors
    public function show(){
        $this->view('dashboard/list_author');

}
 //View authors
 public function show_author(){
    $this->view('dashboard/add_author');

}

}
?>