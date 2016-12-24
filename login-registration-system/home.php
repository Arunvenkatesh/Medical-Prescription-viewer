<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
   function generateFullName()
    {
        document.getElementById('fullName').innerText = 
            document.getElementById('s1').value + ' ' + 
			document.getElementById('m1').value + ' ' +
			document.getElementById('q1').value + ' ' + 
			document.getElementById('t1').value + ' ' + 
			
			document.getElementById('s2').value + ' ' +
			document.getElementById('m2').value + ' ' + 
			document.getElementById('q2').value + ' ' + 
			document.getElementById('t2').value + ' ' + 
			
			document.getElementById('s3').value + ' ' + 
			document.getElementById('m3').value + ' ' +
			document.getElementById('q3').value + ' ' + 
			document.getElementById('t3').value + ' ' + 
			
			document.getElementById('s4').value + ' ' +
			document.getElementById('m4').value + ' ' + 
			document.getElementById('q4').value + ' ' + 
			document.getElementById('t4').value + ' ' +
			
			document.getElementById('s5').value + ' ' + 
			document.getElementById('m5').value + ' ' +
			document.getElementById('q5').value + ' ' + 
			document.getElementById('t5').value + ' ' + 
			
			document.getElementById('s6').value + ' ' +
			document.getElementById('m6').value + ' ' + 
			document.getElementById('q6').value + ' ' + 
			document.getElementById('t6').value + ' ' +
			
			document.getElementById('s7').value + ' ' +
			document.getElementById('m7').value + ' ' + 
			document.getElementById('q7').value + ' ' + 
			document.getElementById('t7').value+"\n";
		
            
    }
	
</script>
<style type="text/css">
td{
background: deepskyblue;
  color: #666666;font-family: 'RobotoDraft', 'Roboto', sans-serif;
  
}
th{

  color: #666666;
  font-family: 'RobotoDraft', 'Roboto', sans-serif;
  
}
form
{
background: deepskyblue;
  color: #666666;
  font-family: 'RobotoDraft', 'Roboto', sans-serif;
  
}
center{
background: deepskyblue;
  color: #666666;
  font-family: 'RobotoDraft', 'Roboto', sans-serif;
  
}
button {
background: deepskyblue ;
color: white;
font-color:blue;
border: 1px solid #eee;
border-radius: 5px;
box-shadow: 2px 2px 2px #eee;
padding: 10px 100px;
}
button:hover {
background: white;
color: deepskyblue;
border: 1px solid #eee;
border-radius: 20px;
box-shadow: 5px 5px 5px #eee;
}
.class1{
background: white;
  color: #666666;
 
  text-align: center;
  letter-spacing: 2px;

padding: 10px 200px;}
</style>

</head>

<body>
<div id="header">
	<div id="left">
    <label>Your Prescription</label>
    </div>
	
    <div id="right">
    	<div id="content">
        	hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>

<body bgcolor="white">
<br>
<form action="http:\\localhost\med-project\docto\login.php" method="post" class="class1" name="pres" >
<center>
<br><br>
<input type="text" name="patname" style="width: 200px;height: 30px" placeholder="Patient name"/>
 <br> <br>  
<input type="text" name="patid" style="width: 200px;height: 30px" placeholder="Patient ID"/>
 <br><br> 
<input type="text" name="date" style="width: 200px;height: 30px" placeholder="Date(dd/mm/yyyy)"/>
  <br><br>
<input type="text" name="treatment" style="width: 200px;height: 30px" placeholder="Treatment"/>
 <br><br>
<b><font color="white">Enter Prescription:</font></b><br>
<font size="4px"><b><pre><center>S.No           Medication          Quantity    M/A/N</center></pre></b></font>

<input type="text" style="width: 87px;height: 30px" id="s1" onkeyup="generateFullName()">
<input type="text" style="width: 200px;height: 30px" id="m1" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="q1" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="t1" onkeyup="generateFullName()"><br>

<input type="text" style="width: 87px;height: 30px" id="s2" onkeyup="generateFullName()">
<input type="text" style="width: 200px;height: 30px" id="m2" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="q2" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="t2" onkeyup="generateFullName()"><br>

<input type="text" style="width: 87px;height: 30px" id="s3" onkeyup="generateFullName()">
<input type="text" style="width: 200px;height: 30px" id="m3" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="q3" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="t3" onkeyup="generateFullName()"><br>

<input type="text" style="width: 87px;height: 30px" id="s4" onkeyup="generateFullName()">
<input type="text" style="width: 200px;height: 30px" id="m4" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="q4" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="t4" onkeyup="generateFullName()"><br>

<input type="text" style="width: 87px;height: 30px" id="s5" onkeyup="generateFullName()">
<input type="text" style="width: 200px;height: 30px" id="m5" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="q5" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="t5" onkeyup="generateFullName()"><br>

<input type="text" style="width: 87px;height: 30px" id="s6" onkeyup="generateFullName()">
<input type="text" style="width: 200px;height: 30px" id="m6" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="q6" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="t6" onkeyup="generateFullName()"><br>

<input type="text" style="width: 87px;height: 30px" id="s7" onkeyup="generateFullName()">
<input type="text" style="width: 200px;height: 30px" id="m7" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="q7" onkeyup="generateFullName()">
<input type="text" style="width: 87px;height: 30px" id="t7" onkeyup="generateFullName()"><br>



<input type="hidden" name="con" id="fullName" onkeyup="generateFullName()" /><br>

<br><br><br>
<button>Add prescription</button>
<br><br>

</center><br>
</form><br>
</div>
</body>
</html>