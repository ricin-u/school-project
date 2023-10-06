<?php 
$connect = mysqli_connect("localhost","root","","smktelkom");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal yada yada yada: " . mysqli_connect_error();
}
?>