<?php
    session_start(); //we need session for the log in thingy XD 
    require 'loginsystem/partials/dbconnect.php';
    if($_SESSION['login']!==true){
        header('location:index.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Hi, <?php echo $_SESSION['username'] ?></strong>
          </a>
            <div class="pull-right">
                <?php
                if(isset($_POST['logout'])){
                    session_start();
                    session_unset();
                    session_destroy();
                    header('location:index.php');
                }
    
                ?>
                <form method="post">
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                    <a class="btn btn-primary" href="index.php" role="button">Home</a>
                </form>
            </div>
        </div>
      </div>
    </header>
    <?php


    
    
    ?>

    <main role="main">

      <section class="text-center">
        <div class="container">
            <?php
            
                $query = "select * from `requests`";
                $result=mysqli_query($con,$query);
                $num=mysqli_num_rows($result);


                if($num>0){
                  while($fetch=mysqli_fetch_assoc($result)){

                    // echo '
                    // <div class=" row w-60">
                    // <div class="card text-white bg-dark mb-3 my-5 shadow-lg p-3 mb-5 bg-dark  rounded" style="max-width: 18rem;">
                    //   <div class="card-header"><h1 class="card-title">'. $fetch['firstname'] .' '. $fetch['lastname'] .'</h1></div>
                    //   <h1 class="jumbotron-heading">'. $fetch['username'] .'</h1>
                    //   <div class="card-body">
                    //     <h5 class="card-title">I would Like to Create an Account In your Organisation</h5>
                    //     <h3 class="jumbotron-heading">Pack Selected :-'. $fetch['pack'] .'</h3>
                    //     <p>
                    //     <a href="accept.php?id='.$fetch['id'].'" class="btn btn-primary my-2" name="accept">Accept</a>
                    //     <a href="reject.php?id='.$fetch['id'].'" class="btn btn-secondary my-2">Reject</a>
                    //   </p>
                    //   </div>
                    // </div>
                    // </div>';

                    echo '<div class="card w-60 my-5 shadow-lg p-3 mb-5 bg-dark text-white rounded" style="border-radius:50px;">
                    <div class="card-body">
                      <h1 class="card-title">'. $fetch['firstname'] .' '. $fetch['lastname'] .'</h1>
                      <h1 class="jumbotron-heading">'. $fetch['username'] .'</h1>
                      <p class="card-text">I would Like to Create an Account In your Organisation</p>
                      <h3 class="jumbotron-heading">Pack Selected :-'. $fetch['pack'] .'</h3>
                      <h5 class="jumbotron-heading"> Email :-'. $fetch['email'] .'</h5>
                      <h5 class="jumbotron-heading"> Contact :-'. $fetch['phone'] .'</h5>
                      <h5 class="jumbotron-heading"> Address :-'. $fetch['address'] .'</h5>
                      <p>
                        <a href="accept.php?id='.$fetch['id'].'" class="btn btn-success my-2" name="accept">Accept</a>
                        <a href="reject.php?id='.$fetch['id'].'" class="btn btn-danger my-2">Reject</a>
                      </p>
                    </div>
                  </div>';
                        
                
                    // echo <h1 class="jumbotron-heading">'. $fetch['firstname'] .' '. $fetch['lastname'] .'</h1>
                    // <h1 class="jumbotron-heading">'. $fetch['username'] .'</h1>
                    //   <p class="lead text-muted">I would like to create an account</p>
                    //   <h1 class="jumbotron-heading">Pack Selected :-'. $fetch['pack'] .'</h1>
                    //   <p>
                    //     <a href="accept.php?id='.$fetch['id'].'" class="btn btn-primary my-2" name="accept">Accept</a>
                    //     <a href="reject.php?id='.$fetch['id'].'" class="btn btn-secondary my-2">Reject</a>
                    //   </p>
                    // <small><i></i></small>;
            
                    }
                }else{
                    echo "No Pending Requests.";
                }
            ?>
          
        </div>
          
      </section>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
