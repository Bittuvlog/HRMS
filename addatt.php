<?php
session_start();
//echo "welcome user ji";
//echo "<br/>";
//echo $_SESSION['user'];
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
}
?>
<?php
$con=include("connection.php");
if($con==true)
{
	//echo "connection created";
}
else
{
	//echo "connect error";
	//die();
}
date_default_timezone_set("Asia/kolkata");
$set_date=date('d-m-Y');
	//echo $set_date;
$set_time=date('h:i:s');
//echo $set_time;
@$depid=$_REQUEST['depid'];
//echo $dept_id;
//--code for getting record of all employee whose department is selected.
$query_info="select * from tbl_employee where depid='$depid'";
$res_info=mysql_query($query_info);
while($row_info=mysql_fetch_array($res_info,MYSQL_BOTH))
{
	//print_r($row_info);
	//empid
	$dept_id=$row_info['depid'];
	$empid=$row_info['empid'];
	$insert="insert into tbl_attendance(empid,date,time) values('$empid','$set_date','$set_time')";
	$check=mysql_query($insert);
	//exception handling
	if($check==false)
	{
		echo "<script>alert('Sorry Attendance Allready Marked');</script>";
		break;
	}
	
}
?>
<?php
include("bootstrap.php");
?>
<html>
      <head>
	        <style>
			#navbarsExample09 ul li a
    {
    color:white;
    }
    #p a:hover{
    color:black;
    }
			</style>
			<link href="css/addatt.css" rel="stylesheet" type="text/css"/>
	  </head>
	  <body>
	  <div id="outer">
<div id="header">
<center><h1 style="font-size:35px;">Attendence</h1></center>
</div>
<br/>
<br/>
<div class="row">
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
</div>
<br/>
	  <center>
	  <h1>Add Attendence</h1>
	<br/>  
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
	  select Department:<select id="sel_dept" onchange="changedept()"style="font-family:arial;font-size: 18px;">
	      <option>--Select--</option>
		  <?php
		  $q_dept="select *from tbl_department";
		  $res_dept=mysql_query($q_dept);
		  while($row_dept=mysql_fetch_array($res_dept,MYSQL_BOTH))
		  {
		  ?>
		  <option value="<?php echo $row_dept['depid'];?>">
		  <?php echo $row_dept['department']; ?>
		  </option>
		  <?php  
		  }
		  ?>
	  </select>
	  </div>
	  <div class="col-sm-4"></div>
	 </div>
	 	<br/> 
	  <div class="showdata">
	  <div class="table-responsive">
<table class="table table-hover shadow p-3 mb-5 bg-white rounded">
<thead>
	  <tr>
	  <th>Sr.no</th>
	  <th>Emp name</th>
	  <th>Department</th>
	  <th>Cur Attendance</th>
	  <th>update Attendencs</th>
	  <th>date</th>
	  <th>time</th>
	  </tr>
	  </thead>
	  <tbody>
	  <?php
	  //$query1="select * from tbl_attendance";
	  $res1=mysql_query("select * from tbl_attendance where date='$set_date'");
	  $a=1;
	  while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
	  {
		  $empid=$row1['empid'];
		  $query5="select * from tbl_employee where empid='$empid'";
		  $res5=mysql_query($query5);
		  while($row5=mysql_fetch_array($res5,MYSQL_BOTH))
		  { 
				//print_r($row5);
				$dpt=$row5['depid'];
			  
		  
	  ?>
	  <tr>
	  <td><?php echo $a?></td>
	  <td><?php 
	   $query7="select * from tbl_employee where empid='$empid'";
		$res7=mysql_query($query7);
		if($row7=mysql_fetch_array($res7,MYSQL_BOTH))
		{
			echo $row7['name'];
		}
	  
	  ;?></td>
	  <td>
	  <?php
		  $query6="select * from tbl_department where depid='$dpt'";
		$res6=mysql_query($query6);
		if($row6=mysql_fetch_array($res6,MYSQL_BOTH))
		{
			echo $row6['department'];
		}
	  ?>
	  </td>
	  <td><?php $status=$row1['status'];//echo $status?>
	  <?php
	  if($status=="present")
	  {
		  ?>
				<img src="images/bluetick.png" height="20px" width="20px"/>
				<?php
	  }
	  else
	  {
		  ?>
		 <img src="images/redcross.png" height="20px" width="20px"/>
         <?php 
	  }
		 ?>		 
	  
	  </td>
	  <td>
	  <?php
	  if($status=="absent")
	  {
		  ?>
	  <a href="chg_a_p.php?att_id=<?php echo $row1['attd_id']?>" style="text-decoration:none;color:blue">present</a>
	  <?php
	  }
	  else
	  { //status=present
		  ?>
	  <a href="chg_p_a.php?att_id=<?php echo $row1['attd_id']?>" style="text-decoration:none;color:red">absent</a>
	  <?php
	  }
	  ?>
	  
	  </td>
	  <td><?php echo $row1['date'];?></td>
	  <td><?php echo $row1['time'];?></td>
	  </tr>
	  <?php 
	  $a++;
	  } 
	  }
	  ?>
	  </tbody>
	  <table>
	  </div>
	  </center>
	  <script>
	  var sel_dept=document.getElementById("sel_dept");
	  function changedept()
	  {
		  var deptid=sel_dept.value
		  //alert(deptid);
		  //now make query string
		  //addatt.php?dept_id=
		  window.location.href='addatt.php?depid='+deptid;
	  }
	  </script>
</body>
</html>