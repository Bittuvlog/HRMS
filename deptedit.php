<?php
$id=$_POST['id'];
//echo $id;
$dept=$_POST['department'];
//echo $dept;
include("connection.php");
$qurey="update tbl_department set department='$dept' where depid='$id'";
mysql_query($qurey);
header("location:department.php");
?>