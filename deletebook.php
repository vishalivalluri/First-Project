




<?php

global $IDs;
$IDs = $_GET['ID'];
session_start();
$_SESSION["AuthorID"] = $IDs;

//echo $IDs;
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost", "root", "");
if(!$con)
{
	die('could not connect'.mysql_error());
	
}
   mysql_select_db("library",$con);
  
  $result = mysql_query("delete  from Book where isbn='".$IDs."'");
  if($result)
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Record deleted succesfully')
    window.location.href='ManageBook.php';
    </SCRIPT>");
}
else
{
	echo "Error Occured";
}

mysql_close($con);