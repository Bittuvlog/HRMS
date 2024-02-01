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
<div id="show">
    <!--Start Container --->
    <div class="container-fluid">

	<!-- Start Menu-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-secondary mx-auto" id="p">
        <div id="reload"><a class="navbar-brand" href="profile.php" style="color:white;">Home</a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item active">
            <div id="a"> <a class="nav-link" href="employee.php">Add Employee<span class="sr-only"></span></a></div>
            </li>
      <li class="nav-item">
      <div id="b"> <a class="nav-link" href="viewemp.php">View  Employee</a></div>
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
	<div class="row"><!---- Second row start----->
            <div class="table-responsive">
  <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        				<th>Sr.No</th>
	                     <th>Emp Name</th>
	                     <th>Department</th>
	                     <th>Basic Salary</th>
	                     <th>Calculate($)</th>
      </tr>
    </thead>
    <tbody>




    <?php
				$a=1;
				$query1="select * from tbl_salary";
			    $res1=mysql_query($query1);
				while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
{
	//print_r($row1);
	//[sal_id][depid][paygrade][basic]
	//create local varible for further use

     $sal_id=$row1['sal_id'];
	 $depid=$row1['depid'];
	 $paygrade=$row1['paygrade'];
	 $basic=$row1['basic'];
	 //echo $sal_id;
	 //echo $depid;
	 //echo $paygrade;
	 //echo $basic;
	 $query2="select * from tbl_employee where depid='$depid'";
	 $res2=mysql_query($query2);
	 while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
//print_r ($row2);
$empid=$row2['empid'];
$name=$row2['name'];
$dpid=$row2['depid'];
//echo $empid;
//echo $name;
//echo $dpid;
//now make a query to get department name;
$query3="select * from tbl_department where depid='$dpid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))           
{
	 $deptname=$row3['department'];
	 //echo $deptname;
}
?>
<tr>
		<td><?php echo $a;?></td>
		<td><?php echo $name;?></td>
		<td><?php echo $deptname;?></td>
		<td><?php echo $basic;?></td>
		<td><a href="calcsalary.php?empid=<?php echo $empid;?>&dept_id=<?php echo $dpid;?>&paygrade=<?php echo $paygrade;?>">Calculate</a></td>
	
	</tr>
	
	<?php
	

$a++;}//inner while
	 
 }//outer while

?>
    </tbody>
  </table>

	</div><!--End Container --->
	</div><!--show End --->
	     
</body>
</html>
	