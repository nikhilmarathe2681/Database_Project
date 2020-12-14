<?php
    require 'loginsystem/partials/dbconnect.php';
    $id = $_GET['id'];
    $query = "select * from `requests` where `id` = '$id' ";

    $result=mysqli_query($con,$query);

    $num=mysqli_num_rows($result);
    if($num > 0){
        while(($fetch=mysqli_fetch_assoc($result))){
            $firstname = $fetch['firstname'];
            $lastname = $fetch['lastname'];
            $username = $fetch['username'];
            $password = $fetch['password'];
            $query = "INSERT INTO `accounts` (`firstname`, `lastname`, `username`, `password`) VALUES ('$firstname', '$lastname', '$username', '$password');";
            
            $result=mysqli_query($con,$query);
            if($result){
                echo "Account has been accepted.";
                
            }else{
                echo "Unknown error occured. Please try again.";
            }
        }
        $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id'";
        $result=mysqli_query($con,$query);
        header("location:home.php");
        

        
    }else{
        echo "Error occured.";
    }
    
    // header("location:home.php");
    // if(count(fetchAll($query)) > 0){
    //     foreach(fetchAll($query) as $row){
    //         $firstname = $row['firstname'];
    //         $lastname = $row['lastname'];
    //         $email = $row['email'];
    //         $password = $row['password'];
    //         $query = "INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `email`, `type`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', 'user', '$password');";
    //     }
    //     $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
    //     if(performQuery($query)){
    //         echo "Account has been accepted.";
    //     }else{
    //         echo "Unknown error occured. Please try again.";
    //     }
    // }else{
    //     echo "Error occured.";
    // }
    
?>
