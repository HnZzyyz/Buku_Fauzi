<?php
    include '../../config-db.php';

    // Buat query Delete
    $sql = 'DELETE FROM kasir WHERE id_kasir='.$_GET['id_kasir'];
    // Jalankan Query
    $connect->query($sql);
    // Arahkan Halaman ke Tampilan Siswa
    header('location:kasir.php');
?>