<?php
/**
 * Model class 
 * TODO:all the methods that complete the CRUD oprations
 */
namespace coding\app\models;

class Offer extends Model{
    /**
     * To specify what is the name of the table in database
     * 
     */
    function __construct(){
    parent::$tblName="offers";
    }
  
}

?>