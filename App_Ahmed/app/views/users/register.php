<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body class="bg-light">
    <div class="contente w-25 m-auto mt-5  p-4 " style="background-color: white;"> 
        <form action="<?php echo URLROOT?>/Users/register" method="POST"> 
            <div class="text-center">
                <h1>Register</h1>
            </div>
            <div>
                <label for="username">Username*</label>  
                <input type="text" id="usernale" name="username" placeholder="Username"  class="w-100 form-control" required>
                <span class="username_eror"></span> 
            </div>
            <div>
                <label for="email">Email*</label>   
                <input type="email" id="email"   name="email" placeholder="Email"     class="w-100 form-control" required> 
                <span class="email_eror"></span>  
            </div>
            <div>
                <label for="Password">Password*</label>   
                <input type="password"   id="Password" name="password"  placeholder="Pasword" class="w-100 form-control"  required> 
                <span class="password_eror"></span>   
            </div>
            <div>  
                <label for="verify">verify your password*</label>   
                <input type="password"   id="verify" name="verify" placeholder="verify your password" class="w-100 form-control"  required>
                <span class="verifyPass_eror"></span>  
            </div> 
            <div class="text-center">
                <button  class="btn btn-primary mt-4">Register</button>   
                <a href="<?php echo URLROOT ?>/users/login" class="btn btn-light mt-4" role='button'>Login</a>
            </div> 
        </form>
    </div>
   
</body>
</html>  