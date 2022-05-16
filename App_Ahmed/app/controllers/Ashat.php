<?php  
class Ashat extends Controller{   
    public function __construct(){ 
        $this->CrudeAchat=$this->model('Achat');   
        $this->PROFILE=$this->model('User');    
    }   
    public function ajax(){
        $this->CrudeAchat=$this->model('Achat');  
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
        'Designation'=>$_POST['Designation'],
        'Type'=>$_POST['Type'], 
        'Fas'=>$_POST['Fas'], 
        'Quantité'=>$_POST['Quantité'],
        'prix_Unitaire'=>$_POST['prix_Unitaire'], 
        'Mantant_HT'=>$_POST['Mantant_HT'],
        'Chantier'=>$_POST['Chantier'], 
        'user_id'=>$_SESSION['user_id']  
       ];   
       if($this->CrudeAchat->insertAchat($Achat)){ 
        redirect('Ashat');
    }    
    }      

    public function DeleteAchat(){
        $id_Achat=$_GET['id_Achat'];  
        if($this->CrudeAchat->DeleteAchat($id_Achat)){ 
            redirect('Ashat');
        }    
    }

    public function UpdateAchat(){
        $Achat=[
            'id_Achat'=>$_POST['id_Achat'],
            'date'=>$_POST['date'],
            'Designation'=>$_POST['Designation'],
            'Type'=>$_POST['Type'], 
            'Fas'=>$_POST['Fas'], 
            'Quantité'=>$_POST['Quantité'],
            'prix_Unitaire'=>$_POST['prix_Unitaire'], 
            'Mantant_HT'=>$_POST['Mantant_HT'],
            'Chantier'=>$_POST['Chantier'], 
            'user_id'=>$_SESSION['user_id']  
        ];
        if($this->CrudeAchat->UpdateAchat($Achat)){
            redirect('Ashat');
        };

    } 
}  