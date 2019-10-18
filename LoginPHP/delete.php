<?php
 include_once("koneksi.php");
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from userlogin where id='$id'";
mysqli_query($mysqli, $query);

header("location:index.php");
?>
