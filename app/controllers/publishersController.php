<?php 
/**
 * publishers class controller 
 * TODO:all the methods that help perform the CRUD operations through the model calss
 * 
 * 
 */

  namespace coding\app\controllers;
/**
 * use the model to access setter
 */
use coding\app\models\Publisher;
 class PublishersController extends Controller{

    //Show publishers (add_publisher view)
    function show(){
        $this->view('dashboard/add_publisher');
    }


/**
 * Show all publishers from the database
 */
function listAll(){

/**
 * Create an instance form publisher model
 */
    $publisher =new Publisher();
    /**
     * access the getAll function from the base model ,
     * and fetch all the data from the specified table
     */
    $publishers=$publisher->getAll();
    
    /** now show the view with the exited data */
    $this->view('dashboard/list_publisher',$publishers);    

}
    /**
     * add a new publisher function 
     * */
    function store(){
     
      /** new instance of the model class */  
     $publisher=new Publisher();
     /**
      * adding the data from the view to the database via the save method
      */
     $publisher->name=$_POST['name'];
     $publisher->phone=$_POST['phone'];
     $publisher->alt_phone =$_POST['alt_phone'];
     $publisher->fax =$_POST['fax'];
     $publisher->email =$_POST['email'];
     $publisher->address =$_POST['address'];
     $publisher->country =$_POST['country'];
     $imageName=$this->uploadFile($_FILES['image']);
     $publisher->image=$imageName!=null?$imageName:"default.png";
     $publisher->created_by=1;    
     $publisher->is_active=isset($_POST['is_active'])?1:0;

    /**
     * Using the save method inside the base model to insert to db
     */
    if($publisher->save())
    {
     $this->view('feedback',['success','تم اضافة البيانات بنجاح']);
    }
   else
   $this->view('feedback',['danger','خطأ في اضافة البيانات']);

    }


 }