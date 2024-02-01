<?php
session_start();
if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:elogin.php?msg=3");
}

?>
<html>
<head>
<?php
include("bootstrap.php");
?>
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
<div class="container-fluid">
<div class="row">
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
      <div id="b"> <a class="nav-link" href="ask.php">Ask for leaves</a></div>
      </li>
        <li class="nav-item">
        <div id="f"><a class="nav-link" href="empshow.php">Update Profile</a></div>
      </li>

      <li class="nav-item">
      <div id="g"><a class="nav-link" href="logout.php">Logout</a></div>
      </li>
          </ul>
        </div>
      </nav>
	  </div>
    <!-- End Menu-->
	<br/><br/>

	  <div class="row">
    <div class="col-sm-3"></div>
    <!---Form start --->
    <div class="col-sm-6 example z-depth-5 " style="min-height:500px;background-color:">
    
                <!-- Default form register -->
<form class=" border-light p-5" action="echangecode.php" method="post">
<!-- Old Password -->
<label style="font-size:25px"><i>Old Password</i></label>
<input type="password" name="op" id="defaultRegisterFormPassword" class="form-control" placeholder="Old Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br/>

<!-- New Password -->
<label style="font-size:25px"><i>New Password</i></label>
<input type="password" name="np" id="defaultRegisterFormPassword" class="form-control" placeholder="New Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br/>
<!-- Confirm number -->
<label style="font-size:25px"><i>Confirm Password</i></label>
<input type="password" name="cnp" id="defaultRegisterFormPassword" class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br/>
<!-- Submit up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Submit</button>
</form>
    </div>
    <!--- Form End--->
    <div class="col-sm-3"></div>
    </div>


	</div><!--Conteiner fluid End------>  
</body>
</html>