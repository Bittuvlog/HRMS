<?php
session_start();
if($_SESSION['user']=="")
{
session_destroy();
header("location:index.php");

}

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
date_default_timezone_set("Asia/Kolkata");
$set_date=date('d-m-Y');
//echo $set_date;
$set_time=date('h:i:s');
//echo $set_time;
@$dept_id=$_REQUEST['dept_id'];
//echo $dept_id;
//--code for getting the records of all employee`s whose department is selected.

?>
<html>
<head>
<?php
include("bootstrap.php");
?>

<!-- <script src="AJAX/viewatt.js" type="text/javascript" ></script> -->
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


	<title>View Attendance</title>
	<!-- <style>
		table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #131517;
  color: white;
  #abc{
	  height:30px;
	  width:80px;
	  background-color:lightgray;
	  color:white;
  }
  #abc:hover{
	  color:black;
  }
  #abd{
	  height:20px;
	  width:80px;
	  background-color:lightgray;
	  color:white;
  }
  #abd:hover{
	  color:black;
  }
  h1{
	  height:15px;
	 
  }
	</style>
		<link rel="stylesheet" href="css/viewatt.css" type="text/css"/> -->
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
        <div id="e"> <a class="nav-link" href="salary.php">Salary</a></div>
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
	  <br/>
	  <br/>
	  <br/>
	  <br/>
	  <h1 align="center">View Attendance</h1>
	  <div class="row">
  			<div class="col-sm-4"></div>
  			<div class="col-sm-4">
			  <labal>Department</labal>
  					  <select  id="sel_dept" onchange="changedept()" style="font-family:arial;font-size: 18px;"> 
   					   <option value="">--select department--</option>
    				  <?php  
						$q_dept="select * from tbl_department";
						$res_dept=mysql_query($q_dept);
						while($row_dept=mysql_fetch_array($res_dept,MYSQL_BOTH))
						{
						?>
      				  <option value="<?php echo $row_dept['depid']; ?>"><?php  echo $row_dept['department']; ?></option>
      				  <?php 
    	
    				}
  
 				   	 ?>
  				  </select>
			  </div>
  			<div class="col-sm-4"></div>
	  </div><!--First row end-->
	  <br/>
	  <br/>
	  
  	<div class="row">
  		
		  <div class="table-responsive">
		  <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
  <thead class="black white-text">
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Emp Name</th>
      <th scope="col">Department</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
	   <tbody>
			<?php
			$a=1;
			$query_info="select * from tbl_employee where depid='$dept_id'";
			$res_info=mysql_query($query_info);
			while($row_info=mysql_fetch_array($res_info,MYSQL_BOTH)) 
			{
				$empid=$row_info['empid'];
				$dep=$row_info['depid'];
				//echo $empid;
				$query_att="select * from tbl_attendance where empid=$empid";
				$res_att=mysql_query($query_att);
				while($row_att=mysql_fetch_array($res_att,MYSQL_BOTH))
				{
			?>	
				<tr><td><?php echo $a;?></td>
					<td><?php $empid=$row_att['empid'];
				$q_name="select * from tbl_employee where empid='$empid'";
				$res_qname=mysql_query($q_name);
				if($row_qname=mysql_fetch_array($res_qname,MYSQL_BOTH))
				{
					echo $row_qname['name'];
					$dep_id=$row_qname['depid'];
					// echo $depid;
				}
					?></td>
					<td><?php  
						$q_depid="select * from tbl_department where depid='$dep'";
				$res_depid=mysql_query($q_depid);
				if ($row_depid=mysql_fetch_array($res_depid,MYSQL_BOTH)) {
				echo $row_depid['department'];
				}
					?></td>
					<td><?php $status=$row_att['status'];
						if($status=="present")
				{
					?>
					<img src="images/bluetick.png" height="20px" width="20px">
				<?php
				}
				else
				{
					?>
					<img src="images/redcross.png" height="20px" width="20px">
				<?php
				}
					?></td>
					<td><?php echo $row_att['date'];?></td>
					<td><?php echo $row_att['time'];?></td>
				</tr>
				<?php
					$a++;
				}
			
			}
			?>
		</tbody>
</table>
</div>
		  
	  </div>

    <!-- End Menu-->
</div><!--End Show--->
</div><!--End Container-fluid--->
	<script>
	var sel_dept=document.getElementById("sel_dept");
	function changedept()
	{	var deptid=sel_dept.value
		//alert(deptid);
		//now make query string
		//addatt.php?dept_id=
		window.location.href='viewatt.php?dept_id='+deptid;
		
	}
	</script>
</div>
</body>
</html>