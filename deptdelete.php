<?php
$id=$_REQUEST['id'];
echo $id;
include("connection.php");
$query="delete from tbl_department where depid='$id'";
mysql_query($query);
header("location:department.php");
?>