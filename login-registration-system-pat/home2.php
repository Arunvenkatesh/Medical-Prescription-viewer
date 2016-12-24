<?php
session_start();
include_once 'dbconnect2.php';

if(!isset($_SESSION['user']))
{
	header("Location: index2.php");
}
$res=mysql_query("SELECT * FROM users_pat WHERE user_pid=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<?php

mysql_connect('localhost','root','');

mysql_select_db('dbtest');

//$sql="SELECT * FROM def"

$records=mysql_query("SELECT * FROM def where patname='paaa'");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_pemail']; ?></title>
<link rel="stylesheet" href="style2.css" type="text/css" />

</head>
<body>
<div id="header">
	<div id="left">
    <label>My Prescription</label>
    </div>
    <div id="right">
    	<div id="content">
        	hi' <?php echo $userRow['user_pname']; ?>&nbsp;<a href="logout2.php?logout">Sign Out</a>
        </div>
    </div>
</div>


<center>
<table>
<?php
while($def=mysql_fetch_assoc($records))
{   

	echo "<tr>";
	echo "<td><b>Patient Name</b></td>";
	echo "<td>:</td>";
	echo "<td>".$def['patname']."</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td><b>Patient Id</b></td>";
	echo "<td>:</td>";
	echo "<td>".$def['patid']."</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td><b>Date                  </b></td>";
	echo "<td>:</td>";
	echo "<td>".$def['date']."</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td><b>Treatment                  </b></td>";
	echo "<td>:</td>";
	echo "<td>".$def['treatment']."</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td><b>Medication                  </b></td>";
	echo "<td>:</td>";
	echo "<td>".$def['ins']."</td>";
	echo "</tr>";
	
	
	
	
	
	//echo "<td>".$def['patid']."</td>";
	
	//echo "<td>".$def['date']."</td>";
	
	//echo "<td>".$def['treatment']."</td>";
	
	//echo "<td>".$def['ins']."</td>";
	
		
	
}
?>
</table>
</center>
</body>
</html>