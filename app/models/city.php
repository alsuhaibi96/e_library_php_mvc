<?php
/**
 * Model class 
 * TODO:all the methods that complete the CRUD oprations
 */
namespace coding\app\models;

class City extends Model{
    /**
     * To specify what is the name of the table in database
     * 
     */
    function __construct(){
    parent::$tblName="cities";
    }
 
}

?>