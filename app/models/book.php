<?php
/**
 * Model class 
 * TODO:all the methods that complete the CRUD oprations
 */
namespace coding\app\models;

class Book extends Model{
    /**
     * To specify what is the name of the table in database
     * 
     */
    function __construct(){
    parent::$tblName="books";
    }
    /**
     * the function that sets the key and the value to the table 
     * ? e.g $name->_post['name'];
     * 
     */
    function __set($name,$value){
     $this->$name=$value;
    }
}

?>