<?php
include "../../layout/header.php";
include "../../config-db.php";

// Query Untuk Mendapatkan Data Kasir Sesuai Dengan ID
$sql = 'select * FROM kasir where id_kasir=' . $_GET['id_kasir'];
$hasil = $connect->query($sql);

$data = $hasil->fetch_assoc();
// print_r($data);

// Proses Update Data
if (isset($_POST['nama'])) {
    // Buat query update berdasarkan id
    $sql = 'UPDATE kasir SET 
        nama                 ="' . $_POST['nama'] . '",
        alamat               ="' . $_POST['alamat'] . '",
        telepon              ="' . $_POST['telepon'] . '",
        status               ="' . $_POST['status'] . '",
        username             ="' . $_POST['username'] . '",
        password             ="' . $_POST['password'] . '",
        akses                ="' . $_POST['akses'] . '"
        WHERE id_kasir=' . $_GET['id_kasir'];

    // Jalankan Query
    $connect->query($sql);

    // Arahkan Ke Halaman Tampilan Siswa
    header('location:kasir.php');
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
                            <h3 style="text-align: center;">Update Data Kasir</h3>
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Nama</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="nama" class="form-control w-100" value="<?= $data['nama'] ?>">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Alamat</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="alamat" class="form-control w-100" value="<?= $data['alamat'] ?>">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Telepon</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="telepon" class="form-control w-100" value="<?= $data['telepon'] ?>">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Status</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="status" class="form-control w-100" value="<?= $data['status'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Username</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="username" class="form-control w-100" value="<?= $data['username'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Password</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="password" name="password" class="form-control w-100" value="<?= $data['password'] ?>">
                                </div>
                            </div>                          
                            <div class="row g-2 align-items-center">
                                <label for="input" class="col-form-label">Akses</label>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="text" name="akses" class="form-control w-100" value="<?= $data['akses'] ?>">
                                </div>
                            </div>                          
                            <div class="btn d-block">
                                <input class="btn btn-outline-success" style=" width: 100%;" type="submit" value="Submit">
                                <a href="kasir.php" class="btn btn-outline-danger" style="margin-top: 20px; width: 100%; " > Cancel</a>
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