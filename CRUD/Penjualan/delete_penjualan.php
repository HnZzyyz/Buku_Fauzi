<?php
    include '../../config-db.php';

    // Buat query Delete
    $sql = 'DELETE FROM penjualan WHERE id_penjualan='.$_GET['id_penjualan'];
    // Jalankan Query
    $connect->query($sql);
    // Arahkan Halaman ke Tampilan Siswa
    header('location:penjualan.php');
?>