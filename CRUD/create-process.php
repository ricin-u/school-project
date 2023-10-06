<?php 
include 'connection.php';

$name = $_POST['name'];
$class = $_POST['class'];
$major = $_POST['major'];
mysqli_query($connect, "INSERT INTO dbbaru VALUES('', '$name', '$class', '$major')");
header("location:../index.php");
?>