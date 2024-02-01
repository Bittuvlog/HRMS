<?php
session_start();
$f=$_POST['a'];
//echo $f;
$date=$_POST['date'];
//echo $date;
$r=$_POST['reason'];
//echo $r;
$email=$_SESSION['employee'];
include("connection.php");
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$uid=$row['0'];

}
$query2="insert into tbl_leave(empid,dfrom,dto,reason,status,doa) values('$uid','$f','$date','$r','N',curdate())";
mysql_query($query2);
header("location:eprofile.php");


?>
