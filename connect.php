<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("dbtest");
if(!$conn)
	echo "error";
else
	echo"Successfull !!!";
?>