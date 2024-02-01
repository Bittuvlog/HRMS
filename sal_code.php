<?php
$con=include("connection.php");
if($con==true)
{
//echo "connection created";

}
else
{
//echo "connection error";
//die();
}
$deptid=$_POST['dept_id'];
$paygrade=$_POST['paygrade'];
//echo $deptid;
//echo $paygrade;
$basic=30*$paygrade;
//echo $basic;
//vaidation for checking the dept_id
$query="select * from tbl_salary where depid='$deptid'";
$res=mysql_query($query);
$count=mysql_num_rows($res);
if($count>=1)
{
//Multiple record
	echo "<script>alert('Salary Alredy Added');window.location.href='salary.php'</script>";

}

else
{
$insert="insert into tbl_salary(depid,paygrade,basic) values('$deptid','$paygrade','$basic')";
$check=mysql_query($insert);
if($check==true)
{
echo"<script>alert('Paygrade Added Successfully');window.location.href='salary.php'</script>";

}
}//else colsing	

?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	