<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
<link rel="stylesheet" href="css/Test.css" type="text/css"/>
<link href="css/menu-vertical.css" rel="stylesheet" type="text/css" />
<script src="js/menu-vertical.js" type="text/javascript"></script>
<script>
function validate()
{
   if(document.getElementById("dropdown").value == "")
   {
      alert("Please select Author"); // prompt user
      document.getElementById("dropdown").focus(); //set focus back to control
	  return false;
      
   }
   var data = document.getElementById("price").value;
if(isNaN(data)){
  alert("Please Enter Valid price");
  document.getElementById("price").focus();
  return false;
   }
   var data = document.getElementById("isbn").value;
if(isNaN(data)){
  alert("Please Enter a Valid ISBN");
  document.getElementById("isbn").focus();
  return false;
   }
     var data = document.getElementById("year").value;
if(isNaN(data)){
  alert("Please Enter a Valid year");
  document.getElementById("year").focus();
  return false;
   }
   return true;
}



</script>
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
<form name="Book" method="post" action="insertBook.php">
<fieldset><legend>Add Book</legend>
 
<label>Title</label><input type="text" name="title" required><br />
 
<label>Year</label><input type="text" name="year"  id="year" required><br />
<label>AuthorName </label>
<select  id="dropdown" name="dropdown">
                <option value="">--- Select ---</option>
                <?php 
                    //include_once'./db.php';
					include 'db.php';
                    $result=mysql_query("SELECT author_id,concat(author_fname,author_lname) as AuthorName FROM Author;");
                    while ($row = mysql_fetch_array($result)) {
                     echo "<option value='".$row['author_id']."'>".$row['AuthorName']."</option>";
                       }
                ?>
				</select><br />
				<label>ISBN</label><input type="text" name="isbn" id="isbn" ><br />
 
<label>Price</label><input type="text" id="price" name="price"  required><br />
 

 
<label>&nbsp;</label><input type="submit" name="submit" value="Submit" onclick= "return validate();">
</center>
 
</fieldset>
</form>
</div>
<div id="footers">
<p>Copyright © 2015 Library System</p>
</div>

</body>
</html>