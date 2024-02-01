<?php
$data=stripslashes(file_get_contents("php://input"));
$mydata=json_decode($data,true);
$department=$mydata['department'];
//$dept=$_POST['department'];
//echo $dept;
include("connection.php");
$query="insert into tbl_department(department,date) values ('$department',curdate())";
mysql_query($query);
header("location:department.php");
?>