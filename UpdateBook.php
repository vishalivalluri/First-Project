<?php
session_start();
$price=$_POST["price"];
$title=$_POST["title"];
$year=$_POST["year"];

$ID=$_SESSION["ISBN"];

include 'db.php';





$sql="update book set price='$price',title='$title',year='$year' where isbn=$ID";
$result=mysql_query($sql,$con);
if($result)
{

	
	
 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Updated record succesfully')
    window.location.href='ManageBook.php';
    </SCRIPT>");

}
else
{
	echo "Error occured";
}

mysql_close($con);