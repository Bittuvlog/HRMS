<?php
session_start();
if($_SESSION['user']=="")
{
session_destroy();
header("location:index.php");
}
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from tbl_department where depid='$id'";
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))	
{

?>
<html>
<head>
<style>
input[type=text]
{
height:50px;
width:400px;
}
#navbarsExample09 ul li a
    {
    color:white;
    }
    #p a:hover{
    color:black;
    }
</style>
<?php 
include("bootstrap.php")
?>
</head>
<body>
<!----Start container-fluid---->
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
<br/>
<div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
<form action="deptedit.php" method="post">
    
        <input type="hidden" name="id" value="<?php echo $row ['depid'];?>"/>
        <div class="form-group">
				  <label class="control-label col-sm-12" for="contact">Update Department</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" value="<?php echo $row['department']; ?>"  name="department" onkeyup="validateContact()" required/>
				  </div>
				</div>
                <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" class="btn btn-primary">Update</button>
				  </div>
				</div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</form>
<?php
}
?>
</div><!----End container-fluid---->
</body>
</html>