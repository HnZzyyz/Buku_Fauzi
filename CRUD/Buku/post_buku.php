<?php 
include "../../config-db.php";

$sql = "insert into buku(
    id_buku,judul,noisbn,penulis,penerbit,tahun,stok,harga_pokok,harga_jual,ppn,diskon) values('".$_POST['id_buku']."','".$_POST['judul']."','".$_POST['noisbn']."','".$_POST['penulis']."','".$_POST['penerbit']."','".$_POST['tahun']."','".$_POST['stok']."','".$_POST['harga_pokok']."','".$_POST['harga_jual']."','".$_POST['ppn']."','".$_POST['diskon']."')";
    
$connect->query($sql);
header('location:buku.php');
?>