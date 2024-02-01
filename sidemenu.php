<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>MARC CRM Project</title>
        <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
<?php
include("bootstrap.php");
?>
<!-- <script src="AJAX/profile.js" type="text/javascript" ></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<style>
* {
  margin:0px;
  padding:0px;
  box-sizing:border-box;
  font-family:sans-serif;
}

#sidebar {
  position:absolute;
  top:0px;
  left:-200px;
  width:200px;
  height:100%;
  background:#151719;
  transition:all 300ms linear;
}
#sidebar.active {
  left:0px;
}
#sidebar .toggle-btn {
  position:absolute;
  left:220px;
  top:10px;
}
#sidebar .toggle-btn span {
  display:block;
  width:30px;
  height:5px;
  background:#151719;
  margin:5px 0px;
  cursor:pointer;
}
#sidebar div.list div.item {
  padding:15px 10px;
  border-bottom:1px solid #444;
  color:#fcfcfc;
  text-transform:uppercase;
  font-size:15px;
}
</style>
</head>
<body>
</body>
<!--- Show div End--->
<div id="show">
    <!--Start Container --->
    <div class="container-fluid">
        <!--Start Header --->
        <div class="row" style="min-height:100px;background-color:grey;">
          <div class="col-sm-2">1</div>
          <div class="col-sm-10">
          <br/>
            <h1 align="center" style="font-family:Imprint MT Shadow;">Admin Pannel MARC HRMS</h1>
          </div>
        <!--End Header --->
        </div>
        <hr/>

        <div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar(this)">
    <span></span>
    <span></span>
    <span></span>
  </div>  
  <div class="list">
    <div class="item">Home</div>
    <div class="item">About us</div>
    <div class="item">Contact us</div>
  </div>
</div>
    <!--End Container --->
    </div>
<!--- Show div End--->
</div>
<script>
function toggleSidebar(ref){
  document.getElementById("sidebar").classList.toggle('active');
}
</script>
</body>
</html>