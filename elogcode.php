<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
//echo $email,$password;
include("connection.php");
$query="select * from tbl_employee where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{ 
    $_SESSION['employee']=$email;
	header("location:eprofile.php");
}
else
{
    header("location:elogin.php?msg=1");	
}
?>