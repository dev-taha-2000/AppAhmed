<?php
class User {
    private $db;
    private $username;
    private $password;
    public function __construct() 
    {
        $this->db = new Database;
    }   

    //register new user
    public function register($data){  
        $this->db->query('INSERT INTO `users` (username, email, password) VALUES (:username, :email, :password)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']); 

        if($this->db->execute()){
            return true;
        }else{  
            return false; 
        }   
    } 
    public function login($username,$password){ 
        $this->db->query('SELECT * FROM users where username = :username'); 
        $this->db->bind(':username', $username);  
        $row = $this->db->singlee(); 
        $hash_password = $row->password;     
        if(password_verify($password,$hash_password)){
            return $row; 
        }else{
            return false;  
        }   
    }       

    public function getUserById($id){  
        $this->db->query('SELECT * FROM users WHERE id_user = :id');
        $this->db->bind(':id',$id); 
        $row = $this->db->single();

        return $row;  
    }  
    public function Profile(){  
        if(isset($_FILES["image"]["name"])){
            $id_user=$_SESSION['user_id']; 
            $target="img_apload/".basename($_FILES['image']['name']);    
            $nameImg=$_FILES['image']['name'];  
            $this->db->query("UPDATE `users` SET `image`='$nameImg' WHERE `id_user`='$id_user'");
            $this->db->execute(); 
            move_uploaded_file($_FILES['image']['tmp_name'],$target);
        } 
    }  
    
    public function findUserByEmail($email , $username){
        $this->db->query('SELECT * FROM users WHERE email = :email AND username = :username');
        $this->db->bind(':email', $email);
        $this->db->bind(':username', $username);
        $row = $this->db->single();  
        //check the row 
        if($this->db->rowCount() > 0){
            return true; 
        }else{
            return false;
        }   
    }   
}  
