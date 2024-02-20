<?php 
include "../config-db.php";

$sql = "insert into distributor(
    id_distributor,nama_distributor,alamat,telepon) values('".$_POST['id_distributor']."','".$_POST['nama_distributor']."','".$_POST['alamat']."','".$_POST['telepon']."')";
    
$connect->query($sql);
header('location:../distributor.php');
?>