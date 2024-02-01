<?php
session_start();
include('connection.php');
$query="select * from tbl_employee";
$res=mysql_query($query);
if($_SESSION['user']=="")
{
session_destroy();
header("location:index.php");
}
?>
<html>
<head>
<?php
include("bootstrap.php");
?>

<title>View Employee</title>
<!-- <script src="AJAX/viewemp.js" type="text/javascript" ></script> -->
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
 <div id="show">
    <!-- Start Menu-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-secondary mx-auto" id="p">
        <div id="reload"><a class="navbar-brand" href="profile.php" style="color:white">Home</a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item active">
            <div id="a"> <a class="nav-link" href="department.php">Add Department<span class="sr-only"></span></a></div>
            </li>
      <li class="nav-item">
      <div id="b"> <a class="nav-link" href="employee.php">Add Employee</a></div>
      </li>

      <li class="nav-item">
      <div id="c"><a class="nav-link" href="salary.php">Salary</a></div>
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
    <br/>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <h1 align="center">View Employee</h1>
    </div>
    <div class="col-sm-4"></div>
</div>

        <div class="row">

<div class="table-responsive">
<table class="table table-hover shadow p-3 mb-5 bg-white rounded">
<thead>
<tr>
<th>S.no</th>
<th>Name</th>
<th>F'name</th>
<th>Gender</th>
<th>Email</th>
<th>Dob</th>
<th>Mobile</th>
<th>Address</th>
<th>Photos</th>
<th>Date</th>
<th>Delete</th>
</tr> 
</thead>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$id=$row['depid'];
?>
<tbody>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['address'];?></td>
<td><img src="employee/<?php echo $row['photos'];?>" height="35px" width="40px"></td>
<td><?php echo $row['date'];?></td>
<td><a href="empdelete.php?id=<?php //echo $row['depid'];?>">delete</a></td>
</tr>
<?php
$a++;
}
?>
<tbody>
</table>
</div>

        </div><!----End row table---->

	</div>
</div><!--End show--->
</div><!--End Container-fluid--->



</body>
</html>
