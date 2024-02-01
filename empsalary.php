<?php
session_start();
include("connection.php");
$email=$_SESSION['employee'];
//echo $email;
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$empid=$row['empid'];
	$dept_id=$row['depid'];
}

?>
<?php
//echo "welcome employee ji";
//echo "<br/>";
//echo $_SESSION['employee'];
if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:elogin.php");
}
//<br/>
//<a href="elogout.php">Logout</a>
?>
<html>
<head>
<!-- <link href="css/emysalary.css" rel="stylesheet" type="text/css"/> -->
  <?php include("bootstrap.php"); ?>
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
      <div id="b"> <a class="nav-link" href="ask.php">Ask My Leave</a></div>
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
	<div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
      <h1 align="center">My Salary</h1>
      </div>
	  </div>

	  <br/>
	  <div class="row">
	  <div class="table-responsive">
  <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
	  <thead>
	  <tr>
	  <th>Sr.no</th>
	  <th>Emp name</th>
	  <th>Department</th>
	  <th>Basic salary</th>
	  <th>Calculate($)</th>
	  </tr>
	  </thead>
	  <tbody>
	  <?php
	  $a=1;
	  $query1="select *from tbl_salary";
	  $res1=mysql_query($query1);
	  while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
	  {
		  //print_r($row1);
		
		  //[sal_id][dept_id][paygrade][basic] 
		  //create a local variable for further use
		   $sal_id=$row1['sal_id'];
		   $dept_id=$row1['depid'];
		   $paygrade=$row1['paygrade'];
		   $basic=$row1['basic'];
		   //echo $sal_id,$dept_id,$paygrade,$basic;
		   $query2="select * from tbl_employee where depid='$dept_id' and empid='$empid'";
		   $res2=mysql_query( $query2);
		   while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
		   {
			   //print_r($row2);
			   //[empid][name][dept_id]
			   $empid=$row2['empid'];
			   $name=$row2['name'];
			   $dpt_id=$row2['depid'];
			   //echo $empid,$name,$dpt_id;
			   //now make a query to get department Name;
			   $query3="select * from  tbl_department where depid='$dpt_id'";
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
			   <td><a href="calcsalary.php?empid=<?php echo $empid;?>&dept_id=<?php echo $dpt_id;?>&paygrade=<?php echo $paygrade;?>">calculate</a></td>
			   </tr>
			   
			   <?php
			 
		   $a++;}//inner while
	  
	  }//outer while	 
	  ?>
	  </tbody>
	  </table>
		</div><!-----End row Table--->
		</div><!-----End row Table--->
</div><!---End Container-fluid---->
</body>
</html>
