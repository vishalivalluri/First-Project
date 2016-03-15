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
<form name="returnbooks" method="post" action="UpdateBookIssues.php">
<?php

global $IDs;
$IDs = $_GET['ID'];
session_start();
$_SESSION["MemberID"] = $IDs;


error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost", "root", "");
if(!$con)
{
	die('could not connect'.mysql_error());
	
}
   mysql_select_db("library",$con);
  
  $result = mysql_query("select booktransaction.member_id,name,isbn,count(isbn) as TotalNoOfBooks,issue_date,due_date from booktransaction inner join member on member.member_id=booktransaction.member_id  where booktransaction.member_id =$IDs"); 
//$row_data['isbn']=array();
   while ($row = mysql_fetch_array($result))
    {
       $MemberID= $row['member_id'];
	    $Name= $row['name'];
		$IssueDate=$row['issue_date'];
		$Duedate=$row['due_date'];
		$Total=$row['TotalNoOfBooks'];
		

   
    }

		
	mysql_close($con);
  
?>
<fieldset><legend>ReturnBooks</legend>
 
<label>MemberID</label><input type="text" name="memberid"  value="<?php echo htmlspecialchars( $MemberID); ?>"><br />
 
<label>MemberName</label><input type="text" name="membername"  value="<?php echo htmlspecialchars( $Name); ?>"><br />
<label>IssueDate</label><input type="text" name="issuedate"  value="<?php echo htmlspecialchars( $IssueDate); ?>"><br />
<label>DueDate</label><input type="text" name="duedate"  value="<?php echo htmlspecialchars( $Duedate); ?>"><br />
<label>TotalNoOfBooks</label><input type="text" name="isbn"  value="<?php echo htmlspecialchars( $Total); ?>"><br />
<label>ReturnDate</label><input type="date" name="returndate"  required><br />
<label>Fine(If Any)</label><input type="text" name="fine" > <br />
<label></label><input type="submit"  colspan="2" value="Submit">


 

 <!--
<label>ISBN</label><input type="text" name="ISBN1"><br />
<label>ISBN</label><input type="text" name="ISBN2"><br />
<label>ISBN</label><input type="text" name="ISBN3"><br />
<label>ISBN</label><input type="text" name="ISBN4">
<br />
 <label>ReturnDate</label><input type="Date" name="returndate" required><br />
<label>Fine(if any)</label><input type="text" name="fine"> <br />
 
<label>&nbsp;</label><input type="submit" name="submit" value="Submit">
-->
 
</center>
 
</fieldset>
 
</form>


</div>
<div id="footers">
<p>Copyright © 2015 Library System</p>
</div>
</body>
</html>