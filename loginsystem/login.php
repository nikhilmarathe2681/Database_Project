<?php

require "partials/dbconnect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $username=str_replace('<','&lt;',$username);
    $username=str_replace('>','&gt;',$username);
    $password=$_POST['password'];
    $password=str_replace('<','&lt;',$password);
    $password=str_replace('>','&gt;',$password);
    

    $log=false;

    // $sql="SELECT * FROM `users`WHERE `username`='$username' AND `password`='$password'";
    // hash method verify
     $sql="SELECT * FROM `users`WHERE `username`='$username'";

    $result=mysqli_query($con,$sql);
    $row=mysqli_num_rows($result);
    if($row==1){
        while($ver=mysqli_fetch_assoc($result)){
            if(password_verify($password,$ver['password'])){

                $log=true;
                echo "loggedd in successfully";
                session_start();
                $_SESSION['username']=$username;
                $_SESSION['loggedin']=true;
                header('location: welcome.php');
            }
            else{
                echo"invalid Credentials"; 
            }
        }
    }
    else{
        echo "invalid credentils ";
    }
    

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="container">
<h1>Login To continue</h1>
        <form action="login.php" method="POST">
            <input type='text' name='username' id="first" placeholder="Enter Name"><br>
            <input type="password" name='password' id='pass' placeholder="Enter password"><br>
            
            <button type="submit">Login</button>
            <button type="submit"><a href="signup.php">Signup</a></button><br>
            <a href="welcome.php">Go to welcome page</a>
        </form>

        
    </div>
    
</body>
</html>