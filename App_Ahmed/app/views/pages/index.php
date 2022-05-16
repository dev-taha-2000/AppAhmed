<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-light">   
   <div class="d-sm-none"> 
    <div class="collapse"  id="navbarToggleExternalContent">  
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>   
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid"> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
          </button>
        </div> 
    </nav>  
   </div>  

    <header class=" d-flex justify-content-between p-3 align-items-center">   
        <h1 class="title d-inline">   
            Geronime
        </h1> 
        <nav>
            <ul >    
                <li class="d-inline "><a href="<?php echo URLROOT?>/users/login" class=" text-decoration-none text-dark fw-bolder a">Connexion</a></li>     
                <li class="d-inline mx-3 "><a href="<?php echo URLROOT?>/users/register" class="text-decoration-none text-dark fw-bolder a">Register</a></li>    
            </ul>
        </nav>
    </header>
    
    <div  class=" row w-75 m-auto  align-items-center mt-5  "> 
        <div class="text-center col-12 col-lg-6">   
            <h1 >Bienvenue !</h1>  
            <p>Lorem   Consectetur commodi similique eius voluptatem impedit perspiciatis minus ullam ab ut! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, harum blanditiis non dignissimos distinctio eum maiores placeat sequi molestias consequatur reiciendis iure, in cumque similique.</p>
            <button class="btn btn-primary mb-5">Register</button> 
        </div> 
        <div class="col-12 col-lg-6">  
            <img src="img/iStock-983321926.jpg" alt="image" class="w-100 shadow-lg p-3 mb-5 bg-body rounded">
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html> 