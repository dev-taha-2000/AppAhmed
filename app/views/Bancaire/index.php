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
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/TableBancaire.css">      
    <title>Rapprochement Bancaire</title>   
</head> 
   <body> 
      <div class="row w-100">    
        <?php require APPROOT . '/views/inc/aside.php'; ?>    
          <div class="col-10">   
            <?php include_once 'navbar.php'?>          
            <div  id="table" class="table-responsive" style="overflow:scroll;height:94vh;">     
                 
            </div>
          </div>   
        <?php include_once 'modal.php'?>
      </div>  
    </body> 
    <input type="hidden" id="view" value="<?=URLROOT?>/Rapprochement_Bancaire/table">
    <input type="hidden" id="insert" value="<?=URLROOT?>/Rapprochement_Bancaire/insert">
    <input type="hidden" id="delete" value="<?=URLROOT?>/Rapprochement_Bancaire/delete">
    <input type="hidden" id="edit" value="<?=URLROOT?>/Rapprochement_Bancaire/edit"> 
    <script src="<?=URLROOT?>/js/Bancaire.js"></script>
    <script src="<?=URLROOT?>/js/crdBancaire.js"></script> 
</html>  
