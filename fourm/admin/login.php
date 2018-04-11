<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>

<div id="login">

    <?php

    //process login form if submitted
    if(isset($_POST['submit'])){

        $username = trim($_POST['name']);
        $password = trim($_POST['hashed_password']);
        
        if($user->login($username,$password)){ 

            //logged in return to index page
            header('Location: index.php');
            exit;
        

        } else {
            $message = '<p class="error">Wrong username or password</p>';
        }

    }//end if submit

    if(isset($message)){ echo $message; }
    ?>



<div class="jumbotron" style="text-align: center;background-image:url(../images/tech.jpg);color: white;">
  <h1 class="display-3">Hello, Welcome to Blogs!</h1>
    <form action="" method="post">
       <p>Please Enter your username and Password.</p
    <p class="lead"><label>Username</label><input type="text" name="username" value=""  /></p>
    <p class="lead"><label>Password</label><input type="password" name="password" value=""  /></p>
    <p><label></label><input type="submit" name="submit" value="Login"  /></p>
    </form>
</div>
</div>
</div>
</body>
</html>