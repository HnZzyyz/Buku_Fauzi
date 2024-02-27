<?php 
include "../../config-db.php";

$sql = "insert into pasok(
    id_distributor,id_buku,jumlah,tanggal) values('".$_POST['id_distributor']."','".$_POST['id_buku']."','".$_POST['jumlah']."','".$_POST['tanggal']."')";
    
$connect->query($sql);
header('location:pasok.php');
?>