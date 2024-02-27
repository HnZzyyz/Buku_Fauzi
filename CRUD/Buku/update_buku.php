<?php
include "../../layout/header.php";
include "../../config-db.php";

// Query Untuk Mendapatkan Data Siswa Sesuai Dengan ID
$sql = 'select * FROM buku where id_buku=' . $_GET['id_buku'];

// Jalan Query
$hasil = $connect->query($sql);

// print_r($hasil->fetch_assoc());

// Variable untuk menyimpan data siswa
$data = $hasil->fetch_assoc();
// print_r($data);

// Proses Update Data
if (isset($_POST['id_buku'])) {
    // Buat query update berdasarkan nis
    $sql = 'UPDATE buku SET 
        id_buku             ="' . $_POST['id_buku'] . '",
        judul               ="' . $_POST['judul'] . '",
        noisbn              ="' . $_POST['noisbn'] . '",
        penulis             ="' . $_POST['penulis'] . '",
        penerbit            ="' . $_POST['penerbit'] . '",
        tahun               ="' . $_POST['tahun'] . '",
        stok                ="' . $_POST['stok'] . '",
        harga_pokok         ="' . $_POST['harga_pokok'] . '",
        harga_jual          ="' . $_POST['harga_jual'] . '",
        ppn                 ="' . $_POST['ppn'] . '",
        diskon              ="' . $_POST['diskon'] . '"
        WHERE id_buku=' . $_GET['id_buku'];

    // Jalankan Query
    $connect->query($sql);

    // Arahkan Ke Halaman Tampilan Siswa
    header('location:buku.php');
}
// Akhir Proses Update Data

?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <?php include "../../layout/sidebar.php" ?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
            <?php include "../../layout/navbar.php" ?>
            <!-- Navbar End -->
   

            <!-- Blank Start -->
            <div class="container-fluid w-auto pt-4 px-4">
                <div class="row vh-50 bg-secondary rounded justify-content-center mx-0">
                    <div class="col-md-6 text-center mt-5 mb-5 w-50">
                        <form action="" method="post" class="row g-3 justify-content-center">
                            <h3 style="text-align: center;">Update Data Buku</h3>
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Id Buku</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="id_buku" class="form-control w-100" value="<?= $data['id_buku'] ?>">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Judul</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="judul" class="form-control w-100" value="<?= $data['judul'] ?>">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">No ISBN</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="noisbn" class="form-control w-100" value="<?= $data['noisbn'] ?>">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Penulis</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="penulis" class="form-control w-100" value="<?= $data['penulis'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Penerbit</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="penerbit" class="form-control w-100" value="<?= $data['penerbit'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Tahun</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="tahun" class="form-control w-100" value="<?= $data['tahun'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Stok</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="stok" class="form-control w-100" value="<?= $data['stok'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Harga Pokok</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="harga_pokok" class="form-control w-100" value="<?= $data['harga_pokok'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Harga Jual</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="harga_jual" class="form-control w-100" value="<?= $data['harga_jual'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">PPN</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="ppn" class="form-control w-100" value="<?= $data['ppn'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Diskon</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="diskon" class="form-control w-100" value="<?= $data['diskon'] ?>">
                                </div>
                            </div>                          
                            <div class="btn d-block">
                                <input class="btn btn-outline-success" style=" width: 100%;" type="submit" value="Submit">
                                <a href="buku.php" class="btn btn-outline-danger" style="margin-top: 20px; width: 100%; " > Cancel</a>
                            </div>
                        </form>                    
                    </div>
                </div>
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <?php include "../../layout/footer.php" ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../assets/js/main.js"></script>
</body>

</html>