<?php
$FName=$_POST["firstName"];
$Lname=$_POST["lastName"];



try {
    include 'dbinc.php';
    $sql = "INSERT INTO Author (author_fname,author_lname)
VALUES ('$FName','$Lname')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('New record added succesfully')
    window.location.href='ManageAuthor.php';
    </SCRIPT>");

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>