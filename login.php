<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container pt-5">
        <form method="post" action="" target="_top">
        <label for="heading" class="display-4">Login</label>
          <div class="form-group row">
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
            <button type="submit" class="btn btn-primary" name="loginbtn">Login</button>
          </div>
        </form>
            <a type="button" class="btn btn-danger" href="signup.php">Sign up</a>
        </div>
</body>

<?php
include 'connect.php';

if(isset($_POST['loginbtn'])){
	$email = $_POST['email'];
	$pass = $_POST['passwrd'];
	$rs = $conn->query("SELECT * FROM users WHERE email = '$email' AND passwrd = '$pass'");
	$num = $rs->num_rows;
	if($num > 0){
        $rws = $rs->fetch_assoc();
        echo "<script type = \"text/javascript\">
        localStorage.setItem('id', ".$rws['id'].");
           alert(\"Login Successful.................\");
           window.location = (\"dash.html\");
         </script>";
        }
		else{
		echo "<script type = \"text/javascript\">
			alert(\"Login Failed. Try Again................\");
			window.location = (\"login.php\");
		</script>";
		}
}
?>

</html>