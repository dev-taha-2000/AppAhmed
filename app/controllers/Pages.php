<?php   
class Pages extends Controller {
  public function __construct(){

  } 
  public function index(){ 
    $this->view('pages/index');       
  }  
  public function profile(){ 
    $this->view('pages/profile');            
  }   
} 