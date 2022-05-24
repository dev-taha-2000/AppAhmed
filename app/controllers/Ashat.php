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
        if(!empty($_POST['page'])){ 
            $page=$_POST['page'];    
        }else{
            $page=1; 
        }  
        $fetch=13; 
        $start=($page-1)*$fetch;  
        $Data=$this->CrudeAchat->SelectAchat($start); 
        $rowCount=$this->CrudeAchat->rowCol();    
        $this->view('pages/loopAchat',$Data,$rowCount,null);               
    }         
    public function SUM(){ 
        $SUM=$this->CrudeAchat->SUM(); 
        $this->viewColaps('pages/TMM',$SUM);   
    }                        
    public function index(){ 
        $this->view('pages/Achat');        
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