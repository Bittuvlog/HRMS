<?php
$data=stripslashes(file_get_contents("php://input"));
$mydata=json_decode($data,true);
$notice=$mydata['notice'];
//echo $notice;
//$notice=$_POST['notice'];
//echo $notice;
include("connection.php");
$query="insert into tbl_noti(notice,date) values('$notice',curdate())";
mysql_query($query);
header("location:addnoti.php");
?>
		
		