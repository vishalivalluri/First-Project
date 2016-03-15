<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
<link rel="stylesheet" href="css/Test.css" type="text/css"/>
<script src="js//validations.js"></script>

</head>
<body>
<div id="headers">

<h2> HuntLibrary Managment System</h2>


<div id="dtr" align="right"></div>
<?php 
echo "<b> ".date('l\, F jS\, Y ')."</b>";
?>
</div>
<div id="sides">


</div>
<div id="sidebars">

</div>

<div id="contents">
<form name="login" method="post" action="admin.php" >
<fieldset><legend>Admin Login</legend>
 
<label>UserName</label><input type="text" name="username" required><br />
 
<label>Password</label><input type="Password" name="password" required><br />
 
 
<label>&nbsp;</label><input type="submit" name="submit" value="Submit">
<br />

 
</center>
 
</fieldset>
 
</form>


</div>
<div id="footers">

<p>Copyright © 2015 Library System</p>

</div>
<script type="javascript">
var d = new Date();
document.getElementById("dtr").innerHTML = d.toDateString();
</script>
</body>
</html>