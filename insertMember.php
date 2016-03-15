
<?php
$Name=$_POST["fname"];
$Email=$_POST["email"];
$Phone=$_POST["phone"];
$Date=$_POST["membershipdate"];
$Address=$_POST["address"];


try {
    include 'dbinc.php';
    $sql = "INSERT INTO Member (name,email,phone,address,dateofMemberShip)
VALUES ('$Name','$Email' ,'$Phone','$Address','$Date')";
    // use exec() because no results are returned
    $conn->exec($sql);
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('New record added succesfully')
    window.location.href='Home.html';
    </SCRIPT>");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>