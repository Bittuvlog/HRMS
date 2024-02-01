<html>
<?php
session_start();
include("connection.php");
$query="select * from tbl_department";
$res=mysql_query($query);
if($_SESSION['user']=="")
{
session_destroy();
header("location:index.php");
}
?>
<head>
<title>Employee</title>
<?php
include("bootstrap.php");
?>
<style>
body{
//background:url('images/d.jpg') no-repeat;
margin:0px;
padding:0px;
}
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
 <div id="show">
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
            <div id="a"> <a class="nav-link" href="department.php">Add Department<span class="sr-only"></span></a></div>
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
    <!-- Start Form-->
    <div class="row">
    <div class="col-sm-3"></div>
        <div class="col-sm-6 shadow-lg p-3 mb-5 bg-white rounded">
        <h1 align="center">Employee Registration</h1>
        <br/>
        <form action="empcode.php" method="post" enctype="multipart/form-data" class="was-validated">
        <div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-12" for="name">Enter Your Name:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="name" name="name" onkeyup="validateName()" required/>
				  </div>
				</div>
        <div class="form-group">
				  <label class="control-label col-sm-12" for="name">Father's Your Name:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="fname" name="fname" onkeyup="validateName()" required/>
				  </div>
				</div>
               
                <div class="form-group">
				  <label class="control-label col-sm-12" for="name">Enter Your DOB:</label>
				  <div class="col-sm-12">
					<input type="date" class="form-control" id="name" name="dob" onkeyup="validateName()" required/>
				  </div>
				</div>

         <!-- Default inline 1-->
         &nbsp;&nbsp;
                Select Your Gender:
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" class="custom-control-input" value="Male" id="defaultInline1" name="a" required/>
                    <label class="custom-control-label" for="defaultInline1">Male</label>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- Default inline 2-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" value="Female" id="defaultInline2" name="a" required/>
                    <label class="custom-control-label" for="defaultInline2">Female</label>
                </div>
                    <br/>
                    <br/>
                    <div class="form-group">
				  <label class="control-label col-sm-12" for="email">Enter Email Address:</label>
				  <div class="col-sm-12">
					<input type="email" class="form-control" id="email" name="email" onkeyup="validateEmail()" required/>
				  </div>
				</div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-12 col-form-label">Enter Password:</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="inputPassword" name="password" onkeyup="validatePassword()"required/>
						<span id="sp"></span>
                    </div>
                </div>

                <div class="form-group">
				  <label class="control-label col-sm-12" for="contact">Enter Your Contact No:</label>
				  <div class="col-sm-12">
					<input type="text" class="form-control" id="contact" name="mobile" onkeyup="validateContact()" required/>
				  </div>
				</div>
        <div class="form-group">
    <label for="exampleFormControlSelect1" class="col-sm-12">Select Department</label>
    <select class="custom-select col-sm-11" style="margin-left:11px;" name="department" id="department">
      <option value="" class="col-sm-12">--select Department--</option>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<option value="<?php echo $row['depid']?>"><?php echo $row['department'];?></option>
<?php
}
?>
    </select>
  </div>

                <div class="form-group">
				  <label class="control-label col-sm-12" for="comment" >Enter Your Address:</label>
				  <div class="col-sm-12">
					<textarea class="form-control" name="address" cols="30" rows="2" style="resize:none;" id="comment" required></textarea>
				  </div>
				</div>
        <div class="form-group">
    <label for="exampleFormControlFile1" class="col-sm-12">Upload Photos</label>
    <input type="file" name="image"class="form-control-file col-sm-12" id="file"/>
  </div>
				
				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-12">
					<button type="submit" class="btn btn-primary">Register</button>
				  </div>
				</div>
			</div>
        </form>
        </div>
	  <div class="col-sm-3"></div>
	</div><!-- End row form--->
    <!-- End Form-->
	</div><!-- show end---->
</div><!--End Container-fluid--->

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
//End
//Password Validation Code Start
function validatePassword()
{
//alert("Hiii");
var pass=document.getElementById("inputPassword").value;
if(pass.length<=3)
{
document.getElementById("sp").innerHTML="Weak Password";
document.getElementById("sp").style.color="red";
}
else if(pass.length>3 && pass.length<=6)
{
document.getElementById("sp").innerHTML="Strong Password";
document.getElementById("sp").style.color="yellow";
}
else
{
document.getElementById("sp").innerHTML="Very Strong Password";
document.getElementById("sp").style.color="green";
}
}
//Password Validation Code End

//Name Validation Code Start
function validateName()
{
//alert("hiii");
var pn=/^[A-Za-z ]{2,40}$/;
var nme=document.getElementById("name").value;
if(!pn.test(nme))
{
document.getElementById("name").style.color="red";
}
else
{
document.getElementById("name").style.color="green";
}
}
//Name Validation Code End

//Contact Number Validations Code Start
function validateContact()
{
//alert("hii");
var mn=/^[0-9]{1,10}$/;
var number=document.getElementById("contact").value;
if(!mn.test(number))
{
document.getElementById("contact").style.color="red";
}
else
{
document.getElementById("contact").style.color="green";
}

}
//Contact Number Validations Code End

//Email Validation Start
function validateEmail()
{
//alert("hiii");
var pe=/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,7}$/;
var eml=document.getElementById("email").value;
if(!pe.test(eml))
{
document.getElementById("email").style.color="red";
}
else
{
document.getElementById("email").style.color="green";
}

}
//Email Validation End
</script>
</body>
</html>
	
