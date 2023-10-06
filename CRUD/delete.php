<?php

include 'connection.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM dbbaru WHERE id='$id'");

header("location:../index.php");

?>