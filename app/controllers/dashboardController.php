<?php 
/**
 * Dhashboard Controller for controlling the data from the model
 * TODO:All other methods for CRUD Operations
 * name space for all controllers
 */
namespace coding\app\controllers;

class DashboardController extends Controller{

    //The method that shows the main view of the dashboard
function show(){
    $this->view('dashboard');
    
}

}


?>