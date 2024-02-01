<?php
$id=$_REQUEST['id'];
echo $id;
include("connection.php");
$query="delete from tbl_employee where depid='$id'";
mysql_query($query);
header("location:viewemp.php");
?>
	
	
	
	
	
	
	
	
	
	
	
	