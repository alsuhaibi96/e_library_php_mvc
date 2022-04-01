<?php
namespace coding\app\controllers;

use coding\app\models\User;

class UsersController extends Controller{

     //Adding a new user
    function newUser(){
        $this->view('dashboard/new_user');
    }


    
 //View register view
        public function registerUser(){
            $this->view('register');

    }

//save user data to databse
    public function saveUser(){

      
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=isset($_POST['is_active'])?1:0;
        $user->role_id=1;
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

/**
 * Show all publishers from the database
 */
function listAll(){

    /**
     * Create an instance form publisher model
     */
        $user =new User();
        /**
         * access the getAll function from the base model ,
         * and fetch all the data from the specified table
         */
        $users=$user->getAll();
        
        /** now show the view with the exited data */
        $this->view('dashboard/list_user',$users);    
    
    }


}
?>