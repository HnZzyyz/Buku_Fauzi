<?php
    include '../../config-db.php';

    // Buat query Delete
    $sql = 'DELETE FROM pasok WHERE id_pasok='.$_GET['id_pasok'];
    // Jalankan Query
    $connect->query($sql);
    // Arahkan Halaman ke Tampilan Siswa
    header('location:pasok.php');
?>