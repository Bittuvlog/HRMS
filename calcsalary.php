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

//empid=2&dept_id=1&paygrade
@$empid=$_REQUEST['empid'];
@$dept_id=$_REQUEST['dept_id'];
$query_workday="select count(*) as workdays from tbl_attendance where empid='$empid' and status='present'";
$res_workdays=mysql_query($query_workday);
if($row_workdays=mysql_fetch_array($res_workdays,MYSQL_BOTH))
{
	
$workday=$row_workdays['workdays'];
//echo $workday;

}
$q_name="select * from tbl_employee where empid='$empid'";
$res_name=mysql_query($q_name);
if($row_name=mysql_fetch_array($res_name,MYSQL_BOTH))
	$emp_name=$row_name['name'];
//echo $emp_name;



//-----------------------------
@$paygrade=$_REQUEST['paygrade'];//done
	$basic=30*$paygrade;//done
	//echo $paygrade;
	$q_dept="select * from tbl_department where depid='$dept_id'";
	$res_dept=mysql_query($q_dept);
	if($row_dept=mysql_fetch_array($res_dept,MYSQL_BOTH))
{

$depart=$row_dept['department'];
//echo $depart;
}

//----------------------------------
//name variables
//--------------------------------
//$emp_name;
//$depart;
//$workday
//$basic
//$paygrade
//------------------------------------
include("payslip.php");
?>