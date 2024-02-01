<?php
session_start();
if($_SESSION['user']=="")
{
session_destroy();
header("location:index.php");

}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>MARC CRM Project</title>
        <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<style>
#success-message{
    background:#DEF1D8;
    color:green;
    padding:10px;
    margin:10px;
    display:none;
    position:absolute;
    right:15px;
    top:50px;
}
#error-message{
    background:#EFDCDD;
    color:red;
    padding:10px;
    margin:10px;
    display:none;
    position:absolute;
    right:15px;
    top:50px;
}
</style>
<!-- <script src="AJAX/department.js" type="text/javascript" ></script> -->
<style>
#navbarsExample09 ul li a
    {
    color:white;
    }
    #p a:hover{
    color:black;
    }
</style>
<?php
include("bootstrap.php");
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
      <!---- First row start----->
            <div class="row">
            <div class="col-sm-4"></diV>
            <div class="col-sm-4">
            <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Add Department</span>
            <input type="text" class="form-control" id="department" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
            <input type="Submit"  class="form-control" id="btnadd" value="ADD" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            </diV>
            <div class="col-sm-4"></diV>
            </div><!---- First row end----->
            <br/>
            <br/>
            <div id="error-message"></div>
<div id="success-message"></div>
<?php
include("connection.php");
$query="select * from tbl_department";
$res=mysql_query($query);
?>
            <div class="row"><!---- Second row start----->
            <div class="table-responsive">
  <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Department</th>
        <th>Date</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
    <?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['department'];?></td>
<td><?php echo $row['date'];?></td>
<td><a href="deptdelete.php?id=<?php echo $row['depid'];?>">delete</a></td>
<td><a href="deptupdate.php?id=<?php echo $row['depid'];?>">update</a></td>
</tr>
<?php
$a++;
}
?>
    </tbody>
  </table>
</div>
            </div><!---- second row end----->
<script>
$("#btnadd").click(function(e){
 	e.preventDefault();
 	//console.log("Save Button Clicked");
     //alert('hiiii');

let dp=$("#department").val();

    //console.log(dp);
    mydata={department:dp};
//console.log(mydata);
    if(dp == "")
    {
        $("#error-message").html("Fields are requried").slideDown();
        $("#success-message").slideUp();
    }else{
        $.ajax({
	 url:"deptcode.php",
 	 method:"POST",
 	 data:JSON.stringify(mydata),
	 success:function(data){
 		 //console.log(data);
		 $("#show").html(data);
         if(data!==1){
            $("#success-message").html(" Add Departament Successfully ").slideDown();
        $("#error-message").slideUp();
         }else{
         $("#error-message").html("Can't save Record").slideDown();
        $("#success-message").slideUp();
            }
	 },
     
  });

    }
 });
</script>
</div><!--End Show--->
</div><!--End Container-fluid--->
</body>
</html>