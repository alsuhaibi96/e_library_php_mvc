<?php
namespace coding\app\controllers;

use coding\app\models\User;

class UsersController extends Controller{

     //Adding a new user
    function newUser(){
        $this->view('dashboard/new_user');
    }


    //View users
        public function show(){
            $this->view('list_categories');

    }
 //View register view
        public function registerUser(){
            $this->view('register');

    }
    public function saveUser(){

        //print_r($_POST);
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=isset($_POST['is_active'])?1:0;
        $user->role_id=1;
        $user->save();
        if($user->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }

    public function register(){
        $this->view("new_user");
    }

    public function delete(){
        
    }




}
?>