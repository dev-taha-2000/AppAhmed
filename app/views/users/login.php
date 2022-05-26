<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body >
    <form action="<?php echo URLROOT?>/Users/login" method="POST">  
        <div class="contente w-25 m-auto mt-5  p-4 border-2 bg-light"> 
                <div class="w-100 text-center">
                    <img src="<?= URLROOT?>/img/logo.png" alt="image">
                </div>   
                <div class="text-center">
                    <h1>Login</h1>
                </div>
                <div> 
                    <label for="username">Username*</label>  
                    <input type="text"    id="username" name="username" placeholder="Username"  class="w-100 form-control" required>
                    <span></span>   
                </div> 
                <div>
                    <label for="Password">Password*</label>   
                    <input type="password" id="Password" name="password"  placeholder="Pasword" class="w-100 form-control"  required> 
                    <span></span>    
                </div> 
                <div class="text-center">
                    <button  class="btn btn-primary mt-4" type="submit">Login</button> 
                    <a href="<?php echo URLROOT ?>/users/register" class="btn btn-light mt-4" role='button'>Register</a>
                </div> 
        </div> 
    </form>    
</body>
</html>  