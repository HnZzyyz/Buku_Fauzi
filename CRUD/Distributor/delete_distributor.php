<?php
    include 'config-db.php';

    // Buat query Delete
    $sql = 'DELETE FROM distributor WHERE id_distributor='.$_GET['id_distributor'];
    // Jalankan Query
    $connect->query($sql);
    // Arahkan Halaman ke Tampilan Siswa
    header('location:../distributor.php');
?>