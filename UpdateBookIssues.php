




<?php
$returndate=$_POST["returndate"];

session_start();
 $IDs=$_SESSION["MemberID"];

//echo $IDs;
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost", "root", "");
if(!$con)
{
	die('could not connect'.mysql_error());
	
}
   mysql_select_db("library",$con);
  
  $result = mysql_query("update booktransaction set return_date='$returndate' ,status='submitted' where member_id='".$IDs."'");
  if($result)
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Record Updated succesfully')
    window.location.href='ManageBookIssue.php';
    </SCRIPT>");
}
else
{
	echo "Error Occured";
}

mysql_close($con);