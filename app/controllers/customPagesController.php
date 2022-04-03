<?php

namespace coding\app\controllers;

class CustomPagesController extends Controller{

    public function notFound (){
        $this->view('404');

    }

    public function notAuthroized(){
        
    }
}
?>