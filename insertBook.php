<?php
$Title=$_POST['title'];
$Year=$_POST['year'];
$ISBN=$_POST['isbn'];
$Price=$_POST['price'];
$Author_id=$_POST['dropdown'];
include 'db.php';

// Perform queries 
$sql="INSERT INTO Book(title,year,author_id,price,isbn) 
VALUES ('$Title','$Year','$Author_id','$Price',$ISBN)";
$result=mysql_query($sql,$con);
if($result)
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('New record added succesfully')
    window.location.href='ManageBook.php';
    </SCRIPT>");
}
else
{
	echo "Error Occured";
}

mysql_close($con);
  
?>