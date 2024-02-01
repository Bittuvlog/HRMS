<?php
error_reporting(0);
$msg=$_REQUEST['msg']; 
//echo $msg;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>MARC CRM Project</title>
        <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

<?php 
  include("bootstrap.php");
?>
</head>
<body>
</body>
</html>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<!--- Start container-fluid  ---->
<div class="container-fluid">
<!--- Start Header Section  ---->
    <div class="row" style="min-height:100px;background-color:grey">
           <!---Header section start---->
            <div class="col-sm-2">
           
            </div>
            <div class="col-sm-10" style="">
            <br/>
            <h1 align="center" style="font-family:Imprint MT Shadow;color:white;"> HRMS EMPLOYEE ZONE</h1>
            </div>
            
            <!---Header section end---->
    </div><br/>
<!--- End Header Section  ---->

<?php
		if($msg==1)
{
	echo "Invalid email or password";
}
       if($msg==2)
{
	echo "logout successfully";
}
if($msg==3)
{
 echo "First Login then see your profile";
}
if($msg==4)
{
 echo "Password changed successfully";
}
?>   

<!--- Start Main Section  ---->
    <div class="row">
            <div class="col-sm-4">
            </div>
            <!--- Login form start--->
            <div class="col-sm-4">
            <!-- Material form login -->
<div class="card shadow-lg p-3 mb-5 bg-white rounded">

<h5 class="card-header info-color white-text text-center py-4">
  <strong style="color:blue;">Employee Login </strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-6 pt-4">

  <!-- Form -->
  <form action="elogcode.php" method="post" class="text-center" style="color: #757575;">
    <!-- Email -->
    <div class="md-form">
      <input type="email" name="email" id="materialLoginFormEmail" class="form-control" required>
      <label for="materialLoginFormEmail">E-mail</label>
    </div>

    <!-- Password -->
    <div class="md-form">
      <input type="password" name="password" id="materialLoginFormPassword" class="form-control" required>
      <label for="materialLoginFormPassword">Password</label>
    </div>

    <div class="d-flex justify-content-around">
      <div>
        <!-- Remember me -->
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
          <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
        </div>
      </div>
      <div>
        <!-- Forgot password -->
        <a href="#">Forgot password?</a>
      </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
      <a href="index.php">Admin Login</a>
    </p>
      <!-- Social login -->
    <a type="button" class="btn-floating btn-fb btn-sm" href="https://www.facebook.com">
      <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
    </a>
    <a type="button" class="btn-floating btn-tw btn-sm" href="https://twitter.com">
      <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
    </a>
    <a type="button" class="btn-floating btn-li btn-sm" href="https://www.linkedin.com">
      <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
    </a>
    <a type="button" class="btn-floating btn-git btn-sm" href="https://github.com">
      <i class="fa fa-github fa-2x" aria-hidden="true"></i>
    </a>
  </form>
  <!-- Form -->
</div>

</div>
<!-- Material form login -->
            <!--- Login form End--->
            </div>
            <div class="col-sm-4"></div>
    </div>
<!--- End main Section  ---->
<!--- Start Footer Section  ---->

<footer class="bg-white text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3">
  <font face="Elephant"> © 2021 Copyright:
    <a class="text-dark">Developed By ABI Group</a></font>
  </div>
  <!-- Copyright -->
</footer>

<!--- End Footer Section  ---->


<!--- End container-fluid  ---->
</div>
</body>
</html>