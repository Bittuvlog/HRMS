<?php
session_start();
include("connection.php");
$query="select * from tbl_noti";
$res=mysql_query($query);
if($_SESSION['user']=="")
{
session_destroy();
header("location:index.php");
}
?>
<html>	
<head>
	<!-- <link rel="stylesheet" href="css/addnotifica.css" type="text/css"/> -->


    <!-- <script src="AJAX/addnoti.js" type="text/javascript" ></script> -->
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
      <div id="k"><a class="nav-link" href="department.php">Add Department</a></div>
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
      <div id="g"><a class="nav-link" href="salary.php">Salary</a></div>
      </li>
          </ul>
        </div>
      </nav>
    <!-- End Menu-->
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <form action="addncode.php" method="post">
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Add Notification :</label>
    <textarea class="form-control" name="notice" id="notice" rows="3" required></textarea>
  </div>
  <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" id="btnadd" class="btn btn-primary">Add</button>
				  </div>
				</div>

      </form>
    </div>
    <div class="col-sm-3"></div>
    </div><!----End row form--->

    <div class="row"><!---- Second row start----->
            <div class="table-responsive">
  <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
    <thead>
      <tr>
      <th>S.No.</th>
      <th>Notice</th>
      <th>Date</th>
      <th>Dalete</th>
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
       <td><?php echo $row['notice'];?></td>
       <td><?php echo $row['date'];?></td>
	   <td><a href="noticedelete.php?id=<?php echo $row['notid'];?>">delete</a></td>
  </tr>
  <?php
  $a++;
  }
  ?>
    </tbody>
  </table>
</div>
            </div><!---- second row end----->

            <div id="error-message"></div>
<div id="success-message"></div>


            <script>
//Inserted Data
$("#btnadd").click(function(e){
 	e.preventDefault();
 	//console.log("Save Button Clicked");
     //alert('hiiii');

let no=$("#notice").val();

    //console.log(no);
   mydata={notice:no};
    //console.log(mydata);
    if(no == "")
    {
        $("#error-message").html("Fields are requried").slideDown();
        $("#success-message").slideUp();
    }else{
        $.ajax({
	 url:"addncode.php",
 	 method:"POST",
 	 data:JSON.stringify(mydata),
	 success:function(data){
 		 //console.log(data);
		 $("#show").html(data);
         if(data!==1){
            $("#success-message").html(" Data Inserted Successfully ").slideDown();
        $("#error-message").slideUp();
         }else{
         $("#error-message").html("Can't save Record").slideDown();
        $("#success-message").slideUp();
            }
	 },
     
  });

    }
 });
 //Delete Record
//  $(document).on("click",".deletebtn",function(){
//         var nid=$(this).data("notid");
//         var element=this;
//         alert(nid);
//         $.ajax({
//             url:"noticedelete.php",
//             type:"POST",
//             data:{id:nid},
//             success :function(data){
//                 if(data==1){
//                     $(element).closest("tr").fadeOut();
//                 }else{
//                     $("#error-message").html("Can't Delete Record").slideDown();
//                     $("#success-message").slideUp();
//                 }
//             },
//         });
//     });
    </script>
</div><!--End Show--->
</div><!--End Container-fluid--->
</body>
</html>