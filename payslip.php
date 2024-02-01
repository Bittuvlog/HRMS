<?php
error_reporting(0);
session_start();
//include("headerside.php");
$emp_name=$emp_name;
$dept=$depart;
$work_days=$workday;
$basic=$basic;
$paygrade=$paygrade;
$hra=(10*$paygrade*$work_days)/100;
//echo $hra;
$da=(20*$paygrade*$work_days)/100;
//echo $da;
$salary=$hra+$da+($paygrade*$work_days);
$tax=(3*$paygrade*$work_days)/100;
$adv=isset($_REQUEST['adv'])?$_REQUEST['adv']:0;
$deductions=$tax+$adv;
$netsal=$salary-$deductions;


?>
 <body onload="window.print();" stye="font-family:rockwell">
 <center>
   <div id="outer" style="height:500px;width:670px;border:10px solid gray;">
   
    <center>
     <table border="1" style="border-collapse:collapse;text-align:left;">
       <h2><b>Pay Slip for the Month of
	   <span id="month">
	   
	   </span></b></h2>
       <tr> 
	     <th style="height:20px;width:300px">Name</th>
		 <td  style="height:20px;width:300px"><input type="text" name="name" value="<?php echo $emp_name;?>"    style="height:20px;width:300px" readonly /></td>
       </tr>
	   <tr>
	     <th>Emp Department</th>
	     <td><input type="text" name="empid" value="<?php echo $dept;?>" style="height:20px;width:300px" readonly /></td>
	   </tr>
	   <tr>
	     <th>Designation</th>
		 <td><input type="text" name="designation" value="<?php echo "N/A";//$desig;?>" style="height:20px;width:300px"readonly /></td>
	   </tr>
	   <tr>
	     <th>No.of Days: (Working Days)</th>
		 <td><input type="text" name="day" value="<?php echo $work_days;?>" style="height:20px;width:300px" readonly /></td>
	   </tr>
	   <tr>
	      <table>
	      <th>
		  <table border="1" style="border-collapse:collapse;text-align:left;">
		  <tr>
		  <th>Gross Salary</th>
		  <th>Amount (INR)</th>
		  </tr>
		  <tr>
		  <td>Basic(Rs)</td>
		  <td><input type="text" name="basic" value="<?php echo $basic;?>.00/-" readonly /></td>
          </tr>
		  <tr>
		  <td>HRA(Rs)</td>
		  <td><input type="text" name="hra" value="<?php echo $hra;?>.00/-" readonly /></td>
          </tr>
		  <tr>
		  <td>DA(Rs)</td>
		  <td><input type="text" name="da" value="<?php echo $da;?>.00/-" readonly /></td>
          </tr>
		  <tr>
		  <th>Total Gross Salary</th>
		  <td><input type="text" name="gross" value="<?php echo $salary;?>.00/-"readonly /></td>
          </tr>
		  
		  </table>
		  </th>
	      <td>
	  <table border="1" style="border-collapse:collapse;text-align:left;">
		  <tr>
		  <th>Deductions*( if Any)</th>
		  <th>Amount (INR)</th>
		  </tr>
		  <tr>
		  <td>Professional Tax</td>
		  <td><input type="text" name="tax" value="<?php echo $tax;?>.00/-" readonly /></td>
          </tr>
		  <tr>
		  <td>Sal Adv</td>
		  <td><input type="text" name="saladv" value="<?php echo $adv;?>.00/-" readonly /></td>
          </tr>
		  <tr>
		  <th>Total Deductions</th>
		  <td><input type="text" name="da" readonly value="<?php echo $deductions;?>"/></td>
          </tr>
		  
		  </table>
		  </td>
		  </table>
		  <tr>
		  <th><b>NET SALARY(INR):</b></th>
		  <td><input type="text" readonly value="<?php echo $netsal;?>.00/-" style="width:300px;"/></td>
		  </tr>
	   </tr>
	   
      </table>
    </center></br></br></br>
	*all deductions are system generated.
   </div>
   </center>
    <script>
 var month=["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];
 var show_month=document.getElementById("month");
 var d=new Date();
 var n=d.getMonth()-1;
 //alert(month[n]);
 show_month.innerHTML = month[n];
 </script>
 </body>
</html>