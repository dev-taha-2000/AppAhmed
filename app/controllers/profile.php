<?php
$this->PROFILE->Profile(); 
$id=$_SESSION['user_id'];  
$row=$this->PROFILE->getUserById($id); 
$image=$row['image'];