<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/landing.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bienvenue à gérant |gérant</title>
    <style>
    .containerA{ 
        width:100%;
        height:100vh;
        background:url("img/logoopacity.png");
        background-size:cover;
        padding-left:30px;
        padding-right:30px;
    }  
    .containerB{
        height:100vh;
        width:100%;
    }
    .containerB .col{
        background:rgb(33, 33, 33);
    } 
    header{
        height:50px;
        position:relative;
        top:20px;
    }
    .bg-secondary{
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;    }
    #logo{
        width:200px;
        height: 100%;
    }
    nav ul li:hover{
        color: rgb(76, 181, 247);
        cursor:pointer; 
    }
    #presentation{
        position:relative;
        top:130px; 
    } 
    .bg-secondary{
        width:400px;
    }  
    </style>
</head>
<body >   
    <div class="containerA">   
        <header class="d-flex justify-content-between align-items-center">
            <div>
                <img src="img/Logo Gérant.jpg " id="logo">  
            </div>
            <nav>
                <ul class="text-light">
                    <a href="<?=URLROOT?>/users/register"><li class="d-inline-block">Register</li></a>  
                    <a href="<?=URLROOT?>/users/login"><li class="d-inline-block ms-4">Connexion</li></a>
                </ul>
            </nav>
        </header>  
    
        <div id="presentation" class="text-center w-50 m-auto text-light ">  
            <h1 style="font-size:60px">Bienvenue à gérant</h1>
            <p style="font-size:20px">Cette application résout un ensemble de problèmes liés au comptable des ventes, des achats, du calcul des bénéfices, etc. Tous les détails que vous trouverez ci-dessous. Si vous voulez commencer, cliquez sur le bouton suivant</p>
            <a href="<?=URLROOT?>/users/register"><button class="btn btn-info">Commencer</button></a> 
        </div> 
    </div>
    <div class="containerB w-100"> 
          <div class="w-100 m-auto mt-5 d-flex flex-wrap justify-content-evenly">
                <div class="bg-secondary mt-5 border rounded  text-center p-2" >
                    <h2 class="text-center">TVA</h2>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aliquid, incidunt pariatur nisi quaerat voluptatem debitis vel beatae quas recusandae est! Aliquid sunt voluptates qui necessitatibus delectus omnis officiis saepe?
                </div>
                <div class="bg-secondary mt-5 border rounded  text-center p-2">
                    <h2  class="text-center">montant_ht</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quas illo adipisci enim reprehenderit soluta minus dignissimos voluptate aspernatur neque nisi porro cum maxime animi, quia rem accusamus veritatis inventore?
                </div> 
                <div class="bg-secondary mt-5 border rounded  text-center p-2">
                    <h2  class="text-center">montant_TTC</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deleniti eos cupiditate cumque nulla nostrum perspiciatis doloremque, reprehenderit quaerat, beatae, assumenda quo. Iste commodi explicabo esse atque obcaecati corporis? Alias!
                </div> 
                <div class="bg-secondary mt-5 border rounded  text-center p-2">
                    <h2 class="text-center">Chantier</h2>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aliquid, incidunt pariatur nisi quaerat voluptatem debitis vel beatae quas recusandae est! Aliquid sunt voluptates qui necessitatibus delectus omnis officiis saepe?
                </div>
                <div class="bg-secondary mt-5 border rounded  text-center p-2">
                    <h2  class="text-center">Client</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quas illo adipisci enim reprehenderit soluta minus dignissimos voluptate aspernatur neque nisi porro cum maxime animi, quia rem accusamus veritatis inventore?
                </div> 
                <div class="bg-secondary mt-5 border rounded  text-center p-2">  
                    <h2  class="text-center">fornusseur</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deleniti eos cupiditate cumque nulla nostrum perspiciatis doloremque, reprehenderit quaerat, beatae, assumenda quo. Iste commodi explicabo esse atque obcaecati corporis? Alias!
                </div> 
          </div>
    </div> 
</body>
</html> 
