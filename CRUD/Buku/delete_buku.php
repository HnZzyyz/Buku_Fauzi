<?php
    include '../../config-db.php';

    // Buat query Delete
    $sql = 'DELETE FROM buku WHERE id_buku='.$_GET['id_buku'];
    // Jalankan Query
    $connect->query($sql);
    // Arahkan Halaman ke Tampilan Siswa
    header('location:buku.php');
?>