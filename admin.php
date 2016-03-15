<?php
$UserName=$_POST['username'];
$Password=$_POST['password'];
if($UserName=="admin" && $Password="admin")
{
	header("Location: Home.html");
	exit;
}
else
{
	echo '<h3><center>Invalid UserName and Password</center></h3>';
}
?>