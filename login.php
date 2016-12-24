<?php
include "connect.php";
$patname=$_POST['patname'];
$patid=$_POST['patid'];
$date=$_POST['date'];
$treatment=$_POST['treatment'];
$ins=$_POST['con'];



echo $patname ." ". $patid ." ". $date ." ".$treatment." ".$ins."</br>";

$result=mysql_query("insert into def(patname,patid,date,treatment,ins) values ('$patname','$patid','$date','$treatment','$ins')",$conn);

//$sql="SELECT * FROM def";

//$res=mysql_query($sql);

//echo $patname . "is added";

echo $patname . " 's PRESCRIPTION is added";


?>