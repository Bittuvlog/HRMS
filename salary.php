<?php
session_start();
$con=include("connection.php");
if($con==true)
{
//echo "connection created";

}
else
{
//echo "connection error";
//die();
}
if($_SESSION['user']=="")
{
session_destroy();
header("location:index.php");
}
?>

<html>
<head>
<!-- <script src="AJAX/salary.js" type="text/javascript" ></script> -->
<?php
include("bootstrap.php");
?>

<script src="js/jj.js" type="text/javascript" ></script>

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
<div id="show">
    <!--Start Container --->
    <div class="container-fluid">
    <!-- Start Menu-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-secondary mx-auto" id="p">
        <div id="reload"><a class="navbar-brand" href="profile.php" style="color:white">Home</a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item active">
            <div id="a"> <a class="nav-link" href="employee.php">Add Employee</a></div>
            </li>
      <li class="nav-item">
      <div id="b"> <a class="nav-link" href="viewemp.php">View  Employee</a></div>
      </li>

      <li class="nav-item">
      <div id="k"><a class="nav-link" href="department.php">Add Department</a></div>
      </li>
       <li class="nav-item">
       <div id="d"> <a class="nav-link" href="addatt.php">Attendance</a></div>
      </li>
        <li class="nav-item">
        <div id="e"> <a class="nav-link" href="viewatt.php">View Attendance</a></div>
      </li>
        <li class="nav-item">
        <div id="f"><a class="nav-link" href="leaves.php">Leaves</a></div>
      </li>

      <li class="nav-item">
      <div id="g"><a class="nav-link" href="addnoti.php">Notification</a></div>
      </li>
          </ul>
        </div>
      </nav>
    <!-- End Menu-->
    <br/>
    <br/>
    <br/>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded" style="min-height:400px;">
    <h1 align="center">Select Salary</h1>
    <form action="sal_code.php" method="post">
    <!---Salary form start---->

    <div class="form-group">
    <label for="exampleFormControlSelect1">Select Department</label>
    <select class="custom-select" name="dept_id" id="department">
      <option value="">--select Department--</option>
      <?php 
			 $q_dept="select * from tbl_department";
		   $res_dept=mysql_query($q_dept);
		   while($row_dept=mysql_fetch_array($res_dept,MYSQL_BOTH))
{
?>
<option value="<?php echo $row_dept['depid']; ?>"><?php echo $row_dept['department']; ?></option>
<?php
}
?>
    </select>
  </div>
  <div class="form-group">
				  <label class="control-label" for="contact">Add Paygrade :</label>  
				<input type="number" class="form-control" id="contact" name="paygrade" required/>.00/- INR (Per Day)
				</div>

      <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" class="btn btn-primary">Add</button>
				  </div>
				</div>


</form>

<form action="viewsalary.php" method="post">
<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
				<button type="submit" class="btn btn-primary">View Salary</button>
				  </div>
				</div>
</form>

</div><!----end col-sm-8--->
<!----end salary--->
<div class="col-sm-2"></div>
</div>

</div><!--End Container-fluid--->
</div><!--End Show--->
</body>
</html>	