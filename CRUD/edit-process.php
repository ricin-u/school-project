<?php 
include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$major = $_POST['major'];
mysqli_query($connect, "UPDATE dbbaru SET name='$name', class='$class', major='$major' WHERE id='$id'");
header("location:../index.php");
?>