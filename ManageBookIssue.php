<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
<link rel="stylesheet" href="css/Test.css" type="text/css"/>
<link href="css/menu-vertical.css" rel="stylesheet" type="text/css" />
<script src="js/menu-vertical.js" type="text/javascript"></script>

<style>
tr:nth-of-type(odd) {
  background-color:#ccc;
}
table tr td{
border: 1px solid black;

}
table{
border-collapse:collapse;
}
</style>

</head>
<body>
<div id="headers">
<header>

<h2>HuntLibrary Managment System</h2>



</header>
</div>
<div id="sides">

<ul id="menu-v">
    <li><a href="Home.html">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="#">Books&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <ul class="sub">
            <li><a href="AddBook.php">AddBook</a></li>
            <li><a href="ManageBook.php">ManageBooks</a></li>
        </ul>
    </li>
	<li><a href="#">Members&nbsp;&nbsp;</a>
        <ul class="sub">
            <li><a href="Membership.html">AddMember</a></li>
            
        </ul>
    </li>
    <li><a href="#">IssueBook</a>
        <ul class="sub">
            <li><a href="BookIssue.html">BookIssues</a></li>
            
			<li><a href="ManageBookIssue.php">ManageBookIssue</a></li>
            
        </ul>
    </li>
    
    <li><a href="#">Author&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <ul class="sub">
            <li><a href="Author.html">AddAuthor</a></li>
            <li><a href="ManageAuthor.php">ManageAuthor</a>
                </ul>
            </li>
            
    
</ul>

</div>
<div id="sidebars">


</div>
<div id="contents">
<form name"ManageBookIssue" method="post" action="EditBookIssue.php"">
<fieldset><legend>ManageBookIssues</legend>
<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost", "root", "");
if(!$con)
{
	die('could not connect'.mysql_error());
	
}
   mysql_select_db("library",$con);
  //$query = "insert into names values('$name','$add1','$add2','$mail')";
  //$result = mysql_query($query);
  //print "<p> Person's Information Inserted </p>";
  $result = mysql_query("select booktransaction.member_id,name,issue_date,count(isbn)as TotalBooks,due_date,booktransaction.status from booktransaction inner join member on member.member_id=booktransaction.member_id where booktransaction.status='barrowed' group by booktransaction.member_id");
  

echo "<table  align='center'>
<tr>
		<th>MemberID</th>
		<th>Name</th>
		<th>IssueDate&nbsp;&nbsp;</th>
		<th>TotalNoOfBooks</th>
		<th>DueDate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>Status</th>
		<th colspan='2'>Action</th>
		
		</tr>";


     
    while ($row = mysql_fetch_array($result))
    {
        echo "<tr>";
		echo "<td>" .$row['member_id']."</td>";
		
		echo "<td>" .$row['name']."</td>";
		echo "<td>" .$row['issue_date']."</td>";
		echo "<td>" .$row['TotalBooks']."</td>";
		echo "<td>" .$row['due_date']."</td>";
		echo "<td>" .$row['status']."</td>";
		
		echo '<td><a href="EditBookIssue.php?IsEdit=1&ID=' .$row['member_id']. '"> Edit </a></td>';
		echo '<td><input type=button value="Delete"></input></td>';

		echo "</tr>";
		
         
     
    }
	echo "</table>";
		
	mysql_close($con);
?>
</center>
 
</fieldset>
 
</form>

</div>
<div id="footers">
<p>Copyright © 2015 Library System</p>
</div>
</body>
</html>