<?php 
include "../../config-db.php";

$sql = "insert into kasir(
    nama,alamat,telepon,status,username,password,akses) values('".$_POST['nama']."','".$_POST['alamat']."','".$_POST['telepon']."','".$_POST['status']."','".$_POST['username']."','".$_POST['password']."','".$_POST['akses']."')";
    
$connect->query($sql);
header('location:kasir.php');
?>