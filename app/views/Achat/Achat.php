<!DOCTYPE html> 
<html lang="en">
<head>
<?php require APPROOT . '/views/inc/head.php'; ?>    
<title>Les Achats</title> 
</head>
<body class="overflow-hidden" style="background-color:rgb(199, 218, 241)";>   
    <div></div>
    <div class="row w-100">    
        <?php require APPROOT . '/views/inc/aside.php'; ?>    
        <div class="col-10">    
            <?php include 'navbar.php'?> 
            <div class="collapse mt-1 " id="collapseExample"> 
                <div class="card card-body bg-primary" id="tmm">
               
                </div>
            </div>  
            <div class="table-responsive"  id='fetch'>  

            </div>    
        </div>
        <div>
        <?php include_once 'modalAchat.php'?> 
        </div>
        <div>
        <?php include_once 'searchDate.php'?>  
        </div>
    </div> 
   
</body>  
</html> 
<input type="text" id='searchDate'  value="<?php echo URLROOT?>/Achat/tableAchat">  
<input type="text" id='SUM'         value="<?php echo URLROOT?>/Achat/SUM"> 
<input type="text" id="URLROOT"     value="<?php echo URLROOT?>/Achat/tableAchat"> 
<input type="text" id="modifyAchat" value="<?php echo URLROOT;?>/Achat/UpdateAchat">  
<input type="text" id="deleteAchat" value="<?php echo URLROOT;?>/Achat/deleteAchat">
<input type="text" id="insetAchat"  value="<?php echo URLROOT;?>/Achat/insertAchat">  
<input type="text" id="autoCompleteChentier"  value="<?php echo URLROOT?>/Achat/autoCompletChantier">  
<input type="text" id="autoCompleteFRS"  value="<?php echo URLROOT?>/Achat/autoCompletFrs">   
<script src="<?php echo URLROOT; ?>/js/searDateAchat.js"></script>     
<script src="<?php echo URLROOT; ?>/js/Achat.js"></script>   
<script src="<?php echo URLROOT; ?>/js/crdAchat.js"></script>   


