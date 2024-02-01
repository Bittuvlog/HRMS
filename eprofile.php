<?php
session_start();
//echo "welcome employee ji";
//echo "<br/>";
//echo $_SESSION['employee'];
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
            <li class="nav-item active">
            <div id="a"> <a class="nav-link" href="ask.php">Ask for Leaves<span class="sr-only"></span></a></div>
            </li>
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
    <!-- End Menu--><br/><br/>
    <!---Start Header---->
    <div class="row">
    <div class="col-sm-12">
    <br/>
    <h2 align="center" style="font-family:Imprint MT Shadow;background-color:black;color:white;">HRMS EMPLOYEE ZONE</h2></div>
    </div>
     <!---End Header----->
     <!--- Start Notice---->
     <div class="row">
     <div class="col-sm-12">
     <h2 align="center">Notice<h2>
     </div>
     </div>
     <!--- Start Form--->
     <div class="row">
     <div class="col-sm-12">
     <marquee scrollamount= "15" onmouseover= "stop();" onmouseout= "start();">
					  <font style="color:blue"><font size="10px">
				 <?php
				     include("connection.php");
                    $query="select * from tbl_noti order by notid desc limit 0,1";
					$res=mysql_query($query);
                     if($row=mysql_fetch_array($res,MYSQL_BOTH))
                     {
                          echo $s=$row['notice'];

                      }				
                    ?>
						</marquee></font></font>
     </div></div>
     <!---End Form---->
     <!--- End Notice---->
    </div><!-- End Container---->
</body>
</html>