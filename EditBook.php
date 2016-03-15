<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
<link rel="stylesheet" href="css/Test.css" type="text/css"/>
<link href="css/menu-vertical.css" rel="stylesheet" type="text/css" />
<script src="js/menu-vertical.js" type="text/javascript"></script>
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
            <li><a href="ReturnBooks.html">BookReturns</a></li>
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
<form name="EditBook" method="post" action="UpdateBook.php">




<?php

global $IDs;
$IDs = $_GET['ID'];
session_start();
$_SESSION["ISBN"] = $IDs;


error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost", "root", "");
if(!$con)
{
	die('could not connect'.mysql_error());
	
}
   mysql_select_db("library",$con);
  
  $result = mysql_query("SELECT title,concat(author_fname,author_lname)as author_name,year,price FROM Book inner join Author on book.author_id=author.author_id where isbn='".$IDs."'");
   while ($row = mysql_fetch_array($result))
    {
       $Title= $row['title'];
	    $Year= $row['year'];
		 $Price= $row['price'];
		  $AuthorName= $row['author_name'];
		

   
    }

		
	mysql_close($con);
  
?>
<fieldset>

<label>Title</label><input type="text" name="title"  value="<?php echo htmlspecialchars( $Title); ?>"><br/>
<label>Year</label><input type="text" name="year" value="<?php echo htmlspecialchars( $Year); ?>" ><br/>
<label>AuthorName</label><input type="text" name="AuthorName" value="<?php echo htmlspecialchars(  $AuthorName); ?>" ><br/>
<label>Price</label><input type="text" name="price" value="<?php echo htmlspecialchars( $Price); ?>" ><br/>
 

 
<label>&nbsp;</label><input type="submit" name="submit" value="Update">


 
</center>
 
</fieldset>
 
</form>

</div>
<div id="footers">
<p>Copyright © 2015 Library System</p>
</div>
</body>
</html>