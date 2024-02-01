<?php
session_start();
include("connection.php");
$query="select * from tbl_leave";
$res=mysql_query($query);
if($_SESSION['user']=="")
{
session_destroy();
header("location:index.php");
}

?>
	<html>
	<head>
	<!-- <style>
	th{
background-color:black;
color:white;
font-family:rockwell;

}
table{
cursor:not-allowed;

}
tr:nth-child(odd){
background-color:lightgray;
}
    </style>
		<link rel="stylesheet" href="css/leaves.css" type="text/css"/> -->

    <!-- <script src="AJAX/leves.js" type="text/javascript" ></script> -->
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
        <div id="f"><a class="nav-link" href="salary.php">Salary</a></div>
      </li>

      <li class="nav-item">
      <div id="g"><a class="nav-link" href="addnoti.php">Notification</a></div>
      </li>
          </ul>
        </div>
      </nav><br/><br/><br/>
    <!-- End Menu-->
</div><!--End Container-fluid--->
</div><!--End Show--->

<!-- 
		 <div id="header">
                <div id="menu">
					<ul>
					<li><a href="profile.php">HOME</a></li>
					<li><a href="employee.php">ADD EMPLOYEE</a></li>
					<li><a href="department.php">ADD DEPARTMENT</a></li>
					<li><a href="viewatt.php">VIEW ATTENDANCE</a></li>
					<li><a href="addatt.php">ATTENDANCE</a></li>
					<li><a href="salary.php">SALARY</a></li>
					<li><a href="viewemp.php">VIEW EMPLOYEE</a></li>
					<li><a href="addnoti.php">NOTIFICATION</a></li>
				</ul>	   
				</div>				
         </div>
		   -->
<!-- <table border="1" style="border-collapse:collapse;" width="100%">
   <tr>
      <th>S.No.</th>
      <th>Employee Name</th>
      <th>Date From</th>
      <th>Date To</th>
      <th>Reason</th>
      <th>Status</th>
  </tr> -->
  <h1 align="center">View Leave</h1> 
  <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Date From</th>
      <th scope="col">Date To</th>
      <th scope="col">Reasion</th>
      <th scope="col">Status</th>
    </tr>
  </thead>

  <?php
  $a=1;
  while($row=mysql_fetch_array($res,MYSQL_BOTH))
  {
    $id=$row['empid'];  
  ?>
  <tr>
       <td><?php echo $a;?></td>
       <td><?php 
	         $query1="select * from tbl_employee where empid='$id'";
			$res1=mysql_query($query1);
			$row1=mysql_fetch_array($res1,MYSQL_BOTH);
			echo $row1['name'];
	   
	   ?></td>
       <td><?php echo $row['dfrom'];?></td>
       <td><?php echo $row['dto'];?></td>
       <td><?php echo $row['reason'];?></td>
       <td><a href="status.php?lid=<?php echo $row['0'];?>"><?php echo $row['status'];?></a></td>
	   
  </tr>
  <?php
  $a++;
  }
  ?>
</table>
</body>
</html>