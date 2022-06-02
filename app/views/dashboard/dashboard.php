<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/profile.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dachboard.css">
    <title>|Dachboard|</title> 
</head>
<body> 
    <div class="row w-100">   
        <?php require APPROOT . '/views/inc/aside.php'; ?>    
        <div class="col-10 ">  
            <div class="row  m-auto mt-2 h-25">
                <div class="col-3 text-center rounded-start" id="dachA">
                </div> 
                <div class="col-3 text-center " id="dachA">
                </div>
                <div class="col-3 text-center " id="dachA">
                </div>
                <div class="col-3 text-center rounded-end" id="dachA">
                </div>
            </div> 
            <div class="row bg-primary m-auto mt-4 rounded " style="height:400px">
              
            </div> 
        </div> 
    </div> 

</body>
</html> 

<script>
    document.getElementById("image").onchange = function(){
    document.getElementById("form").submit();   
    }; 
</script>