<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/profile.css">
    <title>[Les Achats]</title>
</head>
<body class="overflow-hidden"> 
    <div></div>
    <div class="row w-100">    
            <?php include_once 'aside.php'?>  
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
<input type="hidden" id="URLROOT"     value="<?php echo URLROOT?>/Ashat/tableAchat"> 
<input type="hidden" id="modifyAchat" value="<?php echo URLROOT;?>/Ashat/UpdateAchat">  
<input type="hidden" id="deleteAchat" value="<?php echo URLROOT;?>/Ashat/deleteAchat">
<input type="hidden" id="insetAchat"  value="<?php echo URLROOT;?>/Ashat/insertAchat"> 
<script src="<?php echo URLROOT; ?>/js/Achat.js"></script>   
<script src="<?php echo URLROOT; ?>/js/crdAchat.js"></script>  


