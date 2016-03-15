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
<form name"ManageAuthor" method="post" action="EditAuthor.php"">
<fieldset><legend>Manage Book</legend>
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
  $result = mysql_query("select isbn,title,year,price,author_fname from book inner join author on book.author_id=author.author_id");
  

echo "<table  align='center'>
<tr>
		<th>ISBN</th>
		<th>Title</th>
		<th>Year</th>
		<th>Price</th>
		<th>AuthorName</th>
		<th colspan='2'>Action</th>
		
		</tr>";


     
    while ($row = mysql_fetch_array($result))
    {
        echo "<tr>";
		echo "<td>" .$row['isbn']."</td>";
		
		echo "<td>" .$row['title']."</td>";
		echo "<td>" .$row['year']."</td>";
		echo "<td>" .$row['price']."</td>";
		echo "<td>" .$row['author_fname']."</td>";
		
		echo '<td><a href="EditBook.php?IsEdit=1&ID=' .$row['isbn']. '"> Edit </a></td>';
		echo '<td><a href="deletebook.php?IsEdit=1&ID=' .$row['isbn']. '"> Delete</a></td>';
		//echo '<td><input type=button value="Delete"></input></td>';

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