<?php   
class Pages extends Controller {
  public function __construct(){
    $this->PROFILE=$this->model('User'); 
  } 
  public function index(){ 
    $this->view('pages/index');       
  }  
  public function profile(){ 
    include_once 'profile.php';
    $this->view('pages/profile',null,null,$image);           
  }   
} 