<?php  
class Ashat extends Controller{   
    public function __construct(){
        if(empty($_SESSION['username']) || empty($_SESSION['email'])){
            redirect('users/login'); 
        } 
        $this->CrudeAchat=$this->model('Achat');   
        $this->PROFILE=$this->model('User');    
    }   
    public function tableAchat(){   
        $Data=$this->CrudeAchat->SelectAchat();  
        $this->view('pages/loopAchat',$Data);           
    }    
    public function index(){ 
        $Data=$this->CrudeAchat->SelectAchat(); 
        $somme= $this->CrudeAchat->sommeHT(); 
        include_once 'profile.php';  
        $this->view('pages/Achat',$Data,$somme,$image);     
    }   
    public function insertAchat(){  
       $Achat=[ 
        'date'=>$_POST['date'],
        'Designation'=>$_POST['designation'], 
        'Type'=>$_POST['type'], 
        'Fas'=>$_POST['frs'], 
        'Quantité'=>$_POST['Quantité'],
        'prix_Unitaire'=>$_POST['prix_Unitaire'], 
        'Mantant_HT'=>$_POST['Mantant_HT'],
        'Chantier'=>$_POST['Chantier'], 
        'user_id'=>$_SESSION['user_id']  
       ];   
       if($this->CrudeAchat->insertAchat($Achat)){  
        $this->tableAchat();   
        }   
    }     
    
    public function autoCompletChantier(){  
        $chantier=$_POST['chantier'];
        $result=$this->CrudeAchat->autoCompletChantier($chantier); 
        $this->view('pages/autoCompleteChantier',$result);       
    }  
    public function autoCompleteFrs(){
        $frs=$_POST['frs'];
        $result=$this->CrudeAchat->autoCompleteFrs($frs);  
        $this->view('pages/autoCompleteFrs',$result);  
    }
    public function autoCompleteDesignation(){
        $designation=$_POST['designation'];
        $result=$this->CrudeAchat->autoCompleteDesignation( $designation);  
        $this->view('pages/autoCompleteDesignation',$result);  
    }
    public function DeleteAchat(){
        $id_Achat=$_POST['id_Achat'];   
        if($this->CrudeAchat->DeleteAchat($id_Achat)){ 
            $this->tableAchat();  
        }    
    } 
    public function UpdateAchat(){ 
        $Achat=[
            'id_Achat'=>$_POST['id_Achat'],
            'date'=>$_POST['date'],
            'Designation'=>$_POST['designation'],
            'Type'=>$_POST['type'], 
            'Fas'=>$_POST['frs'], 
            'Quantité'=>$_POST['Quantité'],
            'prix_Unitaire'=>$_POST['prix_Unitaire'], 
            'Mantant_HT'=>$_POST['Mantant_HT'],
            'Chantier'=>$_POST['Chantier'], 
            'user_id'=>$_SESSION['user_id']  
        ]; 
        if($this->CrudeAchat->UpdateAchat($Achat)){
            $this->tableAchat();     
        };  

    } 
}  