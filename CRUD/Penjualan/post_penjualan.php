<?php 
include "../../config-db.php";

$sql = "insert into penjualan(
    id_buku,id_kasir,jumlah,total,tanggal) values('".$_POST['id_buku']."','".$_POST['id_kasir']."','".$_POST['jumlah']."','".$_POST['total']."','".$_POST['tanggal']."')";
    
$connect->query($sql);
header('location:penjualan.php');
?>