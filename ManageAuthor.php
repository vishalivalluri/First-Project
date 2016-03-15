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
<script>    
function confirmDelete(url) {
    if (confirm("Are you sure you want to delete this?")) {
        window.open(url);
    } else {
        false;
    }       
}
</script>

</head>
<body>
<div id="headers">
<header>

<h2>Library Managment System</h2>



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
<form name"ManageAuthor" method="post" action="EditAuthor.php"">
<fieldset><legend>Manage Author</legend>
 
<?php
session_start();
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
  $result = mysql_query("SELECT author_id,author_fname,author_lname FROM Author");
  

echo "<table  align='center'>
<tr>

		<th>FirstName</th>
		<th>LastName</th>
		<th colspan='2'>Action</th>
		
		</tr>";


     
    while ($row = mysql_fetch_array($result))
    {
        echo "<tr>";
		
		echo "<td>" .$row['author_fname']."</td>";
		
		echo "<td>" .$row['author_lname']."</td>";
		//echo '<td><input type="submit" id="edit" value="Edit"></input></td>';
		//echo '<td><input type="submit" value="Edit"></td>';
		echo '<td><a href="EditAuthor.php?IsEdit=1&ID=' .$row['author_id']. '"> Edit </a></td>';
		echo '<td><a href="deleteauthor.php?IsEdit=1&ID=' .$row['author_id']. '"  > Delete</a></td>';
		//echo '<td><input type="button" name="delete" value="Delete" onClick="confirmDelete("deleteauthor.php?id=$row['author_id']")"></td>';

		echo "</tr>";
		$AuthorID=$row['author_id'];
		
         //session_start();

     
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