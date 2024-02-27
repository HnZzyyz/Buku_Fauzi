<?php
include "../../layout/header.php";
include "../../config-db.php"
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
            <div class="container-fluid pt-4 px-4">
                <div class="row p-5 h-auto bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <form action="post_penjualan.php" method="post" class="row g-3 justify-content-center">
                            <h3 style="text-align: center;">Input Data Penjualan</h3>
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label for="input" class="col-form-label">ID_Buku</label>
                                </div>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="number" name="id_buku" class="form-control w-100">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label for="input" class="col-form-label">ID_Kasir</label>
                                </div>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="number" name="id_kasir" class="form-control w-100">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label for="input" class="col-form-label">Jumlah</label>
                                </div>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="number" name="jumlah" class="form-control w-100">
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label for="input" class="col-form-label">Total</label>
                                </div>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="number" name="total" class="form-control w-100">
                                </div>
                            </div>                           
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label for="input" class="col-form-label">Tanggal</label>
                                </div>
                                <div class="col-auto" style="width: 100%;">
                                    <input type="date" name="tanggal" class="form-control w-100">
                                </div>
                            </div>                               
                            <div class="btn d-block">
                                <input class="btn btn-outline-success" style=" width: 50%;" type="submit" value="Submit">
                                <input class="btn btn-outline-danger" style="margin-top: 20px; width: 50%; " type="submit" value="Cancel">
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
    <script src="../../js/main.js"></script>
</body>

</html>