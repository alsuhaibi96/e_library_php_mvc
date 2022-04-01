<?php 
/**
 * cities class controller 
 * TODO:all the methods that help perform the CRUD operations through the model calss
 * 
 */

  namespace coding\app\controllers;
/**
 * use the model to access setter
 */
use coding\app\models\City;
 class CitiesController extends Controller{

    //Show cities (add_book view)
    function show(){
        $this->view('dashboard/add_city');
    }


/**
 * Show all cities from the database
 */
function listAll(){

/**
 * Create an instance form book model
 */
    $city =new City();
    /**
     * access the getAll function from the base model ,
     * and fetch all the data from the specified table
     */
    $cities=$city->getAll();
    
    /** now show the view with the exited data */
    $this->view('dashboard/list_city',$cities);    

}
    /**
     * add a new book function 
     * */
    function store(){
     
      /** new instance of the model class */  
     $city=new City();
     /**
      * adding the data from the view to the database via the save method
      */
     $city->name=$_POST['name'];
     $city->created_by=1;    
     $city->is_active=isset($_POST['is_active'])?1:0;

    /**
     * Using the save method inside the base model to insert to db
     */
    if($city->save())
    {
     $this->view('feedback',['success','تم اضافة البيانات بنجاح']);
    }
   else
   $this->view('feedback',['danger','خطأ في اضافة البيانات']);

    }


 }