<?php
$MemberID=$_POST["MemberID"];
$IssueDate=$_POST["IssueDate"];
$Isbn1=$_POST["ISBN1"];
$Isbn2=$_POST["ISBN2"];
$Isbn3=$_POST["ISBN3"];

$duedate=$_POST["duedate"];
include 'db.php';



// Perform queries 
if($Isbn1!="")
{
$result1="INSERT INTO booktransaction(member_id,issue_date,isbn,due_date,status) 
VALUES ($MemberID,'$IssueDate',$Isbn1,'$duedate','barrowed')";
mysql_query($result1,$con);
}
if($Isbn2!="")
{
$result2="INSERT INTO booktransaction(member_id,issue_date,isbn,due_date,status) 
VALUES ($MemberID,'$IssueDate',$Isbn2,'$duedate','barrowed')";
mysql_query($result2,$con);
}
if($Isbn3!="")
{
$result3="INSERT INTO booktransaction(member_id,issue_date,isbn,due_date,status) 
VALUES ($MemberID,'$IssueDate',$Isbn3,'$duedate','barrowed')";
mysql_query($result3,$con);
}
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('New record added succesfully')
    window.location.href='ManageBookIssue.php';
    </SCRIPT>");

mysql_close($con);

?>