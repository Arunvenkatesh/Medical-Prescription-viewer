<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: index2.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: home2.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: index2.php");
}
?>