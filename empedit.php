<?php
$id=$_POST['id'];
//echo $id;
$n=$_POST['name'];
//echo $n;
$fn=$_POST['fname'];
//echo $fn;
$g=$_POST['a'];
//echo $g;
$dob=$_POST['dob'];
//echo $dob;
$mobile=$_POST['mobile'];
//echo $mobile;
$address=$_POST['address'];
//echo $address;
include("connection.php");
$qurey="update tbl_employee set name='$n',fname='$fn',gender='$g',dob='$dob',mobile='$mobile',address='$address' where empid='$id'";
mysql_query($qurey);
header("location:empshow.php");
?>