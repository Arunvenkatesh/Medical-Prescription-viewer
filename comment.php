<?php
mysql_connect("localhost","root","");
mysql_select_db("dbtest");
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comm=$_POST['comm'];
$submit=$_POST['submit'];

 
$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
 
if($submit)
{
if($name&&$email&&$phone&&$comm)
{
$insert=mysql_query("INSERT INTO commenttab (name,email,phone,comm) VALUES ('$name','$email','$phone','$comm') ");
//echo "<meta HTTP-EQUIV='REFRESH' content='0; url=commentindex.php'>";
}
else
{
echo "please fill out all fields";
}
}
}
?>
</center> 
</body>
</html>
