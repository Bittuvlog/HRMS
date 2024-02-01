<!DOCTYPE html>
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
    <div class="row">
    <div class="col-sm-3"></div>
    <!---Form start --->
    <div class="col-sm-6 example z-depth-5 " style="min-height:500px;background-color:">
    
                <!-- Default form register -->
<form class=" border-light p-5" action="adminchangecode.php" method="post">
<!-- Old Password -->
<label style="font-size:25px"><i>Old Password</i></label>
<input type="password" id="defaultRegisterFormPassword" name="op" class="form-control" placeholder="Old Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br/>

<!-- New Password -->
<label style="font-size:25px"><i>New Password</i></label>
<input type="password" id="defaultRegisterFormPassword" name="np" class="form-control" placeholder="New Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br/>
<!-- Confirm number -->
<label style="font-size:25px"><i>Confirm Password</i></label>
<input type="password" id="defaultRegisterFormPassword" name="cnp" class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br/>
<!-- Submit up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Submit</button>
</form>
    </div>
    <!--- Form End--->
    <div class="col-sm-3"></div>
    </div>

    </div> <!--End Container --->
    </div> <!--show --->
</body>
</html>