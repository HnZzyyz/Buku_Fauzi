<?php
include "../../layout/header.php";
include "../../config-db.php";

$sql = 'select * from penjualan';
$hasil = $connect->query($sql);
?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
         <!-- Spinner Start -->
         <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        
        <!-- Sidebar Start -->
        <?php include "../../layout/sidebar.php" ?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
            <?php include "../../layout/navbar.php" ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="vh-100 bg-secondary rounded align-items-center justify-content-center mx-0 p-5">
                    <h1 class="text-center mb-5">Data Tabel Penjualan</h1>
                    <a href="add_kasir.php" class="btn btn-outline-success m-2">Add+</a>
                    <!-- Data Tabel -->
                    <table class="table">
                        <thead>
                            <tr style="color: white" class="bg-transparent rounded p-5 mx-0">
                                <th scope="col">Id_Penjualan</th>
                                <th scope="col">Id_Buku</th>
                                <th scope="col">Id_kasir</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Delete & Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php
                            while ($item = $hasil->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?= $item['id_penjualan'] ?></td>
                                    <td><?= $item['id_buku'] ?></td>
                                    <td><?= $item['id_kasir'] ?></td>
                                    <td><?= $item['jumlah'] ?></td>
                                    <td><?= $item['total'] ?></td>
                                    <td><?= $item['tanggal'] ?></td>
                                    <td>
                                        <a href="update_penjualan.php?id_penjualan=<?= $item['id_penjualan'] ?>" class="btn btn-outline-info me-2">Update</a>
                                        <a href="delete_penjualan.php?id_penjualan=<?= $item['id_penjualan'] ?>" class="btn btn-outline-primary">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
    <script src="../../assets/lib/chart/chart.min.js"></script>
    <script src="../../assets/lib/easing/easing.min.js"></script>
    <script src="../../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../assets/js/main.js"></script>
</body>

</html>