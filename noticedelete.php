<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_noti where notid='$id'";
mysql_query($query);
header("location:addnoti.php");
?>