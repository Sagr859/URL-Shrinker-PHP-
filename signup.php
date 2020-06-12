<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Sign Up</title>
</head>
<script>
    $(document).ready (function(){
      $('#email').blur(function(){
          var emailcheck = $(this).val();
          $.ajax({
              url:"checksign.php",
              method:"POST",
              data:{email:emailcheck},
              dataType:"text",
              success:function(html){
                if(html!=" "){
                  alert(html);
                }
                
              }
          });
        });
      });
  </script>
<body>
    <div class="container pt-5">
        <form method="post" action="" target="_top">
        <label for="heading" class="display-4">Sign Up</label>
          <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label"  >Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter name">
              </div>
            <label for="staticEmail" class="col-sm-2 col-form-label">User Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com">
            </div>
          </div>
          <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="passwrd" name="passwrd" placeholder="Enter password">
            </div>
          </div>
          <div class="form-group row">
            <button type="submit" class="btn btn-primary" name="signin">Sign Up</button>
          </div>
        </form>
            <a type="button" class="btn btn-danger" href="login.php">Back to Login</a>
        </div>
</body>
<?php
include 'connect.php';
if (isset($_POST['signin'])){
   $uname    = $_POST['username'];
   $email = $_POST['email'];
   $pass     = $_POST['passwrd'];
   $sql1="INSERT INTO `users` (`username`,`email`,`passwrd`) VALUES ('$uname','$email','$pass')";
   $newuser = $conn->query($sql1);
   //var_dump($newuser);
   if ($newuser == TRUE){
     echo "<script>
           alert('Successfully Registered');</script>";
     }
   else {
     echo "  <script>
           alert('Registeration Failed');</script>";
     }
   
   }
?>
</html>