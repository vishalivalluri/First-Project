<?php
session_start();
$Author_fname=$_POST["firstName"];
$Author_lname=$_POST["lastName"];
//$Author_id=$_POST['$IDs'];

$ID=$_SESSION["AuthorID"];

include 'db.php';





$sql="update author set author_fname='$Author_fname' ,author_lname='$Author_lname' where author_id=$ID";
$result=mysql_query($sql,$con);
if($result)
{

	
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Updated record succesfully')
    window.location.href='ManageAuthor.php';
    </SCRIPT>");


}
else
{
	echo "Error occured";
}

mysql_close($con);
  
?>