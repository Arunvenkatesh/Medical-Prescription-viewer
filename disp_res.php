<?php

mysql_connect('localhost','root','');

mysql_select_db('dbtest');

//$sql="SELECT * FROM def"

$records=mysql_query("SELECT ins FROM def where patname='pat'");

?>

<html>

<head>
	<title>Employee Data</title>
</head>

<body>

<table>
<tr>
<th>patname</th>
<th>patid</th>
<th>date</th>
<th>treatment</th>
<th>ins</th>

<tr>


<?php


while($def=mysql_fetch_assoc($records))
{
	echo "<tr>";
	
	echo "<td>".$def['patname']."</td>";
	
	echo "<td>".$def['patid']."</td>";
	
	echo "<td>".$def['date']."</td>";
	
	echo "<td>".$def['treatment']."</td>";
	
	echo "<td>".$def['ins']."</td>";
	
	echo "</tr>";
	
	
}
?>
</table>

</body>

</html>


<!--
<?php

/*mysql_connect('localhost','root','');

mysql_select_db('dbtest');

//$sql="SELECT * FROM def"

$records=mysql_query("SELECT ins FROM def where patname='pat'");

?>

<html>

<head>
	<title>Employee Data</title>
</head>

<body>

<table width="600" border="1"  cellpadding="1" cellspacing="1">
<tr>
<th>patname</th>
<th>patid</th>
<th>date</th>
<th>treatment</th>
<th>ins</th>

<tr>


<?php


/*while($def=mysql_fetch_assoc($records))
{
	echo "<tr>";
	
	echo "<td>".$def['patname']."</td>";
	
	echo "<td>".$def['patid']."</td>";
	
	echo "<td>".$def['date']."</td>";
	
	echo "<td>".$def['treatment']."</td>";
	
	echo "<td>".$def['ins']."</td>";
	
	echo "</tr>";
	
	
}*/
?>
</table>

</body>

</html>-->