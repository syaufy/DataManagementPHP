<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// update data ke database
mysqli_query($mysqli,"update userlogin set username='$username', password='$password', email='$email' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>