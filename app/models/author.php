<?php

namespace coding\app\models;

class AUthor extends Model{
    function __construct()
    {

        parent::$tblName="authors";
    }
    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>