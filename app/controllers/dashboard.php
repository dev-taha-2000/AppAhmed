<?php   
class Dashboard extends Controller {
  public function __construct(){  
  } 
   
  public function index(){    
    $this->view('dashboard/dashboard');            
  }    
}   