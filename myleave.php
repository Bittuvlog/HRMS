<?php
session_start();
include("connection.php");
$email=$_SESSION['employee'];
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$uid=$row['0'];

}

$query2="select * from tbl_leave where empid='$uid'";	
$res2=mysql_query($query2);

if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:elogin.php?msg=3");
}
?>
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
      <li class="nav-item">
      <div id="b"> <a class="nav-link" href="ask.php">Ask My Leave</a></div>
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
    <!-- End Menu--><br/><br><br/>

    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
      <h1 align="center">My Leaves</h1>
      </div>
      <div class="col-sm-4"></div>
    </div>
    <div class="row">
    <div class="table-responsive">
    <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Date From</th>
      <th scope="col">Date To</th>
      <th scope="col">Reason</th>
      <th scope="col">Status</th>
      <th scope="col">Date of Apply</th>
    </tr>
	<?php
	$b=1;
	while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
	{
	
	?>
			<tr>
			      <td><?php echo $b;?></td>
			      <td><?php echo $row2['dfrom'];?></td>
			      <td><?php echo $row2['dto'];?></td>
			      <td><?php echo $row2['reason'];?></td>
			      <td><?php echo $row2['status'];?></td>
			      <td><?php echo $row2['doa'];?></td>
			</tr>
			
<?php
$b++;
	}
	?>
	</table>
	</form>
	</div>
	</div>

            </div><!---End container----->   
	
	</body>
	</html>