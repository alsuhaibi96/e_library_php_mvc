<?php
/**
 * Model class 
 * TODO:all the methods that complete the CRUD oprations
 */
namespace coding\app\models;

class Publisher extends Model{
    /**
     * To specify what is the name of the table in database
     * 
     */
    function __construct(){
    parent::$tblName="publishers";
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