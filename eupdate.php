<?php
session_start();
	if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:elogin.php?msg=3");
}
	?>



<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from tbl_employee where empid='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<title>Update Profile</title>
</head>
<body bgcolor="#d7ccc8">
<center>
<table>
<tr>
<td><h1>Update My Profile</h1></td>
</tr>
<tr>
<form action="empedit.php" method="post">
<input type="hidden" name="id" value="<?php echo $row ['empid'];?>"/>
<tr>
<td>Name:-<br/><br/>
<input type="text" name="name" value="<?php echo $row['name']; ?>"/><br/><br/></td>
</tr>
<tr>
<td>F'name:-<br/><br/>
<input type="text" name="fname" value="<?php echo $row['fname']; ?>"/><br/><br/></td>
</tr>
<tr>
<td>Gender:-<br/><br/>
<input type="radio" name="a" value="male" <?php if($row['gender']=='male'){?> checked <?php } ?>/>Male
<input type="radio" name="a" value="female" <?php if($row['gender']=='female'){ ?> checked <?php } ?>/>Female
<br/><br/>
</td>
</tr>
<tr>
<td>DOB:-<br/><br/>
<input type="date" name="dob" value="<?php echo $row['dob']; ?>"/>
<br/><br/>
</td>
</tr>
<tr>
<td>Mobile No.:-<br/><br/>
<input type="number" name="mobile" value="<?php echo $row['mobile']; ?>"/><br/><br/></td>
</tr>
<tr>
<td>Address:-<br/><br/>
<textarea maxlength="200" name="address"><?php echo $row['address']; ?></textarea><br/><br/></td>
<tr>
<td>
<input type="submit" value="update"/>
</td>
</tr>
</form>
</table>
<?php
}
?></center>
	</body>
	</html>