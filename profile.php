<!DOCTYPE html>
<html lang="en">
<?php
session_start();
//echo "welcome user ji";
//echo "<br/>";
//echo $_SESSION['user'];
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php?$msg=3");
}
?>
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
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <!-- <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script> -->

<!-- <script src="AJAX/profile.js" type="text/javascript" ></script> -->
<script src="js/jj.js" type="text/javascript" ></script>
</head>
<body>
</body>
<!--- Show div End--->
<div id="show">
    <!--Start Container --->
    <div class="container-fluid">
        <!--Start Header --->
        <div class="row" style="min-height:100px;background-color:grey;">
          <div class="col-sm-1">
          <font size="5px"><font color="white"><p align="center">Today <?php echo date("d/m/y");?></p></font></font>
          </div>
          <div class="col-sm-9">
          <br/>
            <h1 align="center" style="font-family:Imprint MT Shadow;">Admin Pannel  HRMS</h1>
          </div>
          <div class="col-sm-2">
          <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown" style="float:right;color:white;">
              <span class="nav-profile-name" style="float:right;color:white;"><?php echo $_SESSION['user'];?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <div id="h"> <a class="dropdown-item" href="adminchange.php">
                <i class="mdi mdi-logout text-primary"></i>
                Change Password
              </a></div>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
          </div>
        <!--End Header --->
        </div>
        <hr/>

        
    <!--Start Row 1 --->
      <div class="row mx-2">
      <div class="col-sm-3" >
      <div class="card text-white mb-3 mx-2 bg-primary" style="min-height:200px;">
  <div class="card-header">01</div>
  <div class="card-body" >
    <a href="department.php"  style="color:white;"><h5 class="card-title">Add Department</h5></a>
  </div>
  </div>
</div>
<div class="col-sm-3">
<div class="card text-white bg-secondary mb-3 mx-2" style="min-height:200px;">
  <div class="card-header">02</div>
  <div class="card-body">
  <div id="a"><a href="employee.php" style="color:white;"><h5 class="card-title">Add Employee</h5></a></div>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card text-white bg-success mb-3 mx-2" style="min-height:200px;">
  <div class="card-header">03</div>
  <div class="card-body">
  <div id="b"><a href="viewemp.php" style="color:white;"><h5 class="card-title">View Employee</h5></a></div>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card text-white bg-danger mb-3 mx-2" style="min-height:200px;">
  <div class="card-header">04</div>
  <div class="card-body">
  <div id="c"> <a href="salary.php" style="color:white;"><h5 class="card-title">Salary</h5></a></div>
  </div>
  </div>
</div>

      
      </div>
    <!--End Row 1 --->
	<br/>
    <!--Start Row 2 --->
    <div class="row mx-2">
    <div class="col-sm-3">
    <div class="card bg-warning text-white mb-3 mx-2" style="min-height:200px;">
  <div class="card-header">05</div>
  <div class="card-body">
  <div id="d"><a href="addatt.php" style="color:white;"> <h5 class="card-title">Attendance</h5></a></diV>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card text-body text-white bg-info mb-3 mx-2" style="min-height:200px;">
  <div class="card-header text-white">06</div>
  <div class="card-body">
  <div id="e"><a href="viewatt.php" style="color:white;"><h5 class="card-title text-white">View Attendance</h5></a></div>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card mb-3 mx-2" style="min-height:200px; background:grey;">
  <div class="card-header text-white">07</div>
  <div class="card-body">
  <div id="f"><a href="leaves.php" style="color:white;"><h5 class="card-title text-white">Leave</h5></a></div>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card text-white bg-dark mb-3 mx-2" style="min-height:200px;">
  <div class="card-header">08</div>
  <div class="card-body">
  <div id="g">  <a href="addnoti.php" style="color:white;"><h5 class="card-title">Notification</h5></a></div>
  </div>
</div> 
</div> 
    </div>
    <!--End Row 2 --->
    <!--End Container --->
    </div>
<!--- Show div End--->
</div>
</body>
</html>