<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">
  Launch demo modal
</button> -->
<?php
        if((isset($_POST['signup']))){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $pack=$_POST['pack'];
            
            // $message = "$lastname $firstname would like to request an account.";
            $query = "INSERT INTO `requests` (`firstname`, `lastname`, `username`, `password`, `pack`, `date`) VALUES ('$firstname', '$lastname', '$username', '$password', '$pack', current_timestamp());";
            $result=mysqli_query($con,$query);
            if($result){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }
    
    ?>

<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmodalLabel">Signup</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <div class="mb-3">
    <label for="exampleInputname" class="form-label">FirstName</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputlast" class="form-label">LastName</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputlast" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
  <label for="exampleInputPack" class="form-label">Select one Pack</label>
                                <select class="form-control-select" id="rselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="Personal Loan">Starter</option>
                                    <option class="select-option" value="Car Loan">Medium</option>
                                    <option class="select-option" value="House Loan">Complete</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
  
                            <div class="mb-3">
    <label for="exampleInputPack" class="form-label">Conform Pack Selected</label>
    <input type="text" name="pack" class="form-control" id="exampleInputPack">
  </div>
  <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with EBase's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
  <div class="text-center">
  
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" name="signup" class="btn btn-primary col-3 my-3">SignUp</button>
  </div>
</form>
      </div>
      
    </div>
  </div>
</div>
