<!doctype html>
<html>
<head>
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
		echo '<td><input type=button id="edit" value="Edit"></input></td>';
		echo '<td><input type=button value="Delete"></input></td>';

		echo "</tr>";
		
         
     
    }
	echo "</table>";
		
	mysql_close($con);
?>


</body>
</html>