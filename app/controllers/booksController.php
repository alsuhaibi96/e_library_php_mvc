<?php 
/**
 * books class controller 
 * TODO:all the methods that help perform the CRUD operations through the model calss
 * 
 * \ (backslash) is the namespace separator in PHP 5.3.
 *  A \ before the beginning of a function represents the Global Namespace. 
 * Putting it there will ensure that the function called is from the global namespace, 
 * even if there is a function by the same name in the current namespace.
 */

  namespace coding\app\controllers;
/**
 * use the model to access setter
 */
use coding\app\models\Book;
 class BooksController extends Controller{

    //Show books (add_book view)
    function show(){
        $this->view('dashboard/add_book');
    }


/**
 * Show all books from the database
 */
function listAll(){

/**
 * Create an instance form book model
 */
    $book =new Book();
    /**
     * access the getAll function from the base model ,
     * and fetch all the data from the specified table
     */
    $books=$book->getAll();
    
    /** now show the view with the exited data */
    $this->view('dashboard/list_books',$books);    

}
    /**
     * add a new book function 
     * */
    function store(){
     
      /** new instance of the model class */  
     $book=new Book();
     /**
      * adding the data from the view to the database via the save method
      */
     $book->title=$_POST['title'];
     $imageName=$this->uploadFile($_FILES['image']);
     $book->image=$imageName!=null?$imageName:"default.png";
     $book->price=$_POST['price'];
     $book->description=$_POST['description'];
     $book->pages_number=$_POST['pages_number'];
     $book->quantity=$_POST['quantity'];
     $book->format=$_POST['format'];
     $book->created_by=1;    
     $book->is_active=isset($_POST['is_active'])?1:0;

    /**
     * Using the save method inside the base model to insert to db
     */
    if($book->save())
    {
     $this->view('feedback',['success','تم اضافة البيانات بنجاح']);
    }
   else
   $this->view('feedback',['danger','خطأ في اضافة البيانات']);

    }


 }