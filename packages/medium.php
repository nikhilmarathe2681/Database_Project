<?php

session_start();

        if(!isset($_SESSION['login'])){
            header("location:../index.php");
        }
        else{
          if($_SERVER['REQUEST_METHOD']=='POST'){
  
            
            session_unset();
            session_destroy();
            
            $message= urlencode("loggedout");
            header("location:../index.php?message".$message);

            
            
            }
    }



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>STarter</title>
  
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Hii <?php echo $_SESSION['username'];?></strong>
            
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Welcome To Medium Pack</strong>
          </a>
        
                <form method="post">
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                    <a class="btn btn-primary" href="index.php" role="button">Home</a>
                </form>
            </div>
        </div>
      </div>

    <div class="container-md">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">sr no</th>
      <th scope="col">File Name</th>
      <th scope="col">Type</th>
      <th scope="col">click below to download </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>IT database</td>
      <td>PDF</td>
      <td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>software database<</td>
      <td>PDF</td>
      <<td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>mobile database</td>
      <td>PDF</td>
      <td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td>
    </tr>
    <tr>
      <th scope="row">4 </th>
      <td>mobile database</td>
      <td>PDF</td>
      <td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td> 
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>placements database</td>
      <td>PDF</td>
      <td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>students database</td>
      <td>PDF</td>
      <td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>workers database</td>
      <td>PDF</td>
      <td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>JOB database</td>
      <td>PDF</td>
      <td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Client database</td>
      <td>PDF</td>
      <td><a href="https://drive.google.com/file/d/1U-azBa35M5DKOeuoRDvwtMXRxQN6C7zJ/view?usp=sharing" target="_thapa">download now</a></td>
    </tr>
  </tbody>
</table>
</div>

   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>


