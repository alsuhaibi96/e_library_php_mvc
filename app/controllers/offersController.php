<?php 
/**
 * offers class controller 
 * TODO:all the methods that help perform the CRUD operations through the model calss
 * 
 * 
 */

  namespace coding\app\controllers;
/**
 * use the model to access setter
 */
use coding\app\models\Offer;
 class OffersController extends Controller{

    //Show offers (add_Offer view)
    function show(){
        $this->view('dashboard/add_offer');
    }


/**
 * Show all offers from the database
 */
function listAll(){

/**
 * Create an instance form Offer model
 */
    $offer =new Offer();
    /**
     * access the getAll function from the base model ,
     * and fetch all the data from the specified table
     */
    $offers=$offer->getAll();
    
    /** now show the view with the exited data */
    $this->view('dashboard/list_offer',$offers);    

}
    /**
     * add a new book function 
     * */
    function store(){
     
      /** new instance of the model class */  
     $offer=new Offer();
     /**
      * adding the data from the view to the database via the save method
      */
      $offer->title=$_POST['name'];
      $offer->discount=$_POST['discount'];
      $offer->start_date=$_POST['from'];
      $offer->end_date=$_POST['to'];
      $offer->created_by=1;    
      $offer->is_active=isset($_POST['is_active'])?1:0;

    /**
     * Using the save method inside the base model to insert to db
     */
    if($offer->save())
    {
     $this->view('feedback',['success','تم اضافة البيانات بنجاح']);
    }
   else
   $this->view('feedback',['danger','خطأ في اضافة البيانات']);

    }


 }