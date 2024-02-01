 <?php
session_start();
if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:elogin.php?msg=3");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php") ?>

    <style>
#navbarsExample09 ul li a
    {
    color:white;
    }
    #p a:hover{
    color:black;
    }
</style>

</head>
<body>
     <!--Start Container --->
     <div class="container-fluid">
    <!-- Start Menu-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-secondary mx-auto" id="p">
        <div id="reload"><a class="navbar-brand" href="eprofile.php" style="color:white">Home</a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
      <li class="nav-item">
      <div id="b"> <a class="nav-link" href="myleave.php">My Leaves</a></div>
      </li>

      <li class="nav-item">
      <div id="c"><a class="nav-link" href="empsalary.php">My Salary</a></div>
      </li>
       <li class="nav-item">
       <div id="d"> <a class="nav-link" href="empatt.php">My Attendance</a></div>
      </li>
        <li class="nav-item">
        <div id="e"> <a class="nav-link" href="empshow.php">Update Profile</a></div>
      </li>
        <li class="nav-item">
        <div id="f"><a class="nav-link" href="echange.php">Change Password</a></div>
      </li>

      <li class="nav-item">
      <div id="g"><a class="nav-link" href="logout.php">Logout</a></div>
      </li>
          </ul>
        </div>
      </nav>
    <!-- End Menu--><br/><br/><br/>
    <!---Start Header---->
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <h2 align="center" style="font-family:Imprint MT Shadow;background-color:#;color:black;">Ask For Leave</h2>
    </div>
    <div class="col-sm-4"></div>
    </div>
     <!---End Header----->
     <!--- Start Form--->
     <div class="row">
<div class="col-sm-3"></div>
		<!---Start Form---> 
		<div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded"> 
    <!-- Default form register -->
<form class=" border-light p-5" action="askcode.php" method="post">
<!-- New Password -->
<div class="form-group">
<label style="font-size:25px">Date From</label>
<input type="date" id="defaultRegisterFormPassword" name="a" class="form-control" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br/>
</div>
<div class="form-group">
<!-- Confirm number -->
<label style="font-size:25px">Date To</label>
<input type="date" id="defaultRegisterFormPassword" name="date" class="form-control" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br/>
</div>
<div class="form-group">
        <!-- Default textarea message -->
        <label for="defaultFormMessageModalEx" style="font-size:25px">Reason</label>
        <textarea type="text" id="defaultFormMessageModalEx" name="reason" class="md-textarea form-control"></textarea>
</div>
<div class="form-group">
<!-- Submit up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Submit</button>
</div>
</form>
    <!---End Form--->
    </div>
	<div class="col-sm-3"></div>
     </div>
     <!---End Form---->
    </div><!-- End Container---->
</body>
</html>
