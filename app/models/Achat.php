
<?php 

class Achat{   
    private $db; 
    public function __construct() 
    {
        $this->db = new Database;  
    }    
    public function SelectAchat(){   
        if(!empty($_POST['Search'])){ 
            $user_id=$_SESSION['user_id'];              
            $search=$_POST['Search'];  
            $this->db->query("SELECT *FROM  `Achat`  WHERE   `id_users`='$user_id' AND   `Chantier` LIKE '%$search%'  OR `Fas` LIKE '%$search%'  limit 11");
            $result = $this->db->resultSet();
            return $result;           
        }                 
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date'])){
            $user_id=$_SESSION['user_id'];              
            $from=$_POST['from_date'];
            $to=$_POST['to_date'];
            $this->db->query("SELECT *FROM `Achat` WHERE  `id_users`='$user_id' AND  `date` BETWEEN '$from' AND '$to' limit 11");        
            $result = $this->db->resultSet();  
            return $result; 
        }else{
            $user_id=$_SESSION['user_id'];         
            $this->db->query("SELECT * FROM `Achat`  WHERE  `id_users`='$user_id'  ORDER BY `date` DESC limit 11");        
            $result = $this->db->resultSet();  
            return $result;   
        }  
    }   
    public function insertAchat($Achat){ 
        
        $date=$Achat['date']; 
        $Designation= $Achat['Designation']; 
        $Type=$Achat['Type']; 
        $Fas= $Achat['Fas'];  
        $Quantité=$Achat['Quantité']; 
        $prix_Unitaire=$Achat['prix_Unitaire']; 
        $Mantant_HT=$Achat['Mantant_HT'];  
        $Chantier=$Achat['Chantier'];   
        $user_id=$Achat['user_id'];      
        $this->db->query("INSERT INTO `achat` (date , Designation , Type , Fas , Quantité , prix_unitaire , Mantant_HT , Chantier , id_users) VALUES ('$date','$Designation','$Type','$Fas','$Quantité','$prix_Unitaire','$Mantant_HT','$Chantier','$user_id')");
        
        if($this->db->execute()){
            return true;
        }else{  
            return false; 
        }   
    }  
     
    public function DeleteAchat($id_Achat){
        $this->db->query("DELETE FROM `Achat` WHERE '$id_Achat'=`id_Acchat`");
        
        if($this->db->execute()){
            return true;
        }else{  
            return false; 
        }   
    } 

    public function UpdateAchat($Achat){
        $id_Achat=$Achat['id_Achat'];
        $date=$Achat['date']; 
        $Designation= $Achat['Designation']; 
        $Type=$Achat['Type']; 
        $Fas= $Achat['Fas'];   
        $Quantité=$Achat['Quantité']; 
        $prix_Unitaire=$Achat['prix_Unitaire']; 
        $Mantant_HT=$Achat['Mantant_HT'];  
        $Chantier=$Achat['Chantier'];   
        $user_id=$Achat['user_id'];  
        $this->db->query("UPDATE `achat` SET `date`='$date',`Designation`='$Designation',`Type`='$Type',`Fas`='$Fas',`Quantité`='$Quantité',`prix_Unitaire`=' $prix_Unitaire',`Mantant_HT`='$Mantant_HT',`Chantier`='$Chantier' WHERE '$id_Achat'=`id_Acchat`");
        
        if($this->db->execute()){ 
            return true;
        }else{  
            return false; 
        }   
    } 
    public function autoCompletChantier($chantier){ 
        $user_id=$_SESSION['user_id'];    
        $this->db->query("SELECT `Chantier` FROM `Achat` WHERE  `id_users`='$user_id' AND  `Chantier` LIKE '%$chantier%'  limit 5");  
        $result=$this->db->resultSet();  
        return $result;    
    }
    public function autoCompleteFrs($frs){
        $user_id=$_SESSION['user_id'];    
        $this->db->query("SELECT `Fas` FROM `Achat` WHERE  `id_users`='$user_id' AND  `Fas` LIKE '%$frs%'  limit 5"); 
        $result=$this->db->resultSet();  
        return $result; 
    }
    public function autoCompleteDesignation($designation){
        $user_id=$_SESSION['user_id'];    
        $this->db->query("SELECT `Designation` FROM `Achat` WHERE  `id_users`='$user_id' AND  `Designation` LIKE '%$designation%'  limit 5"); 
        $result=$this->db->resultSet();  
        return $result; 
    }
    public function sommeHT(){
        $user_id=$_SESSION['user_id'];         
        $this->db->query("SELECT sum(Mantant_HT) AS Mantant_HT FROM `Achat`  WHERE  `id_users`='$user_id'");        
        $row=$this->db->single();  
        return $row; 
    }
}

