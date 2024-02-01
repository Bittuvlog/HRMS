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
<html>
<head>
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
      <div id="b"> <a class="nav-link" href="ask.php">Ask My Leave</a></div>
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
	  </div>
    <!-- End Menu--><br/><br/>
	<br/>  
	<div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
      <h1 align="center">Update Details</h1>
      </div>
	  </div> 
<br/>
<?php        include("connection.php");
$email=$_SESSION['employee'];
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$uid=$row['0'];

}

$query2="select * from tbl_employee where empid='$uid'";	
$res2=mysql_query($query2);
?>	<div class="row">
		<div class="table-responsive">
  <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
	<thead>
	<tr>	
		<th>S.NO</th>
		<th>Name</th>
		<th>F'name</th>
		<th>Gender</th>
		<th>Email</th>
		<th>DOB</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Department</th>
		<th>Date</th>
		<th>Update</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$b=1;
	while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
	{
		$id=$row2['depid'];
	
	?>
			<tr>
			      <td><?php echo $b;?></td>
			      <td><?php echo $row2['name'];?></td>			
			      <td><?php echo $row2['fname'];?></td>			
			      <td><?php echo $row2['gender'];?></td>			
			      <td><?php echo $row2['email'];?></td>					
			      <td><?php echo $row2['dob'];?></td>			
			      <td><?php echo $row2['mobile'];?></td>			
			      <td><?php echo $row2['address'];?></td>			
			      <td><?php
				  
				   $query1="select * from tbl_department where depid='$id'";
                   $res1=mysql_query($query1);
                   $row1=mysql_fetch_array($res1,MYSQL_BOTH);
                   echo $row1['department'];
				  
				  ?></td>			
					
			      <td><?php echo $row2['date'];?></td>	
                  <td><a href="eupdate.php?id=<?php echo $row['empid'];?>">update</a></td>
			</tr>
			
<?php
$b++;
	}
	?>
	</tbody>
	</table>
</div>
</div><!---End Table row ---->
</div><!---Container-fluide End---->
</body>
</html>