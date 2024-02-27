<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Shop Books</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <!-- <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div> -->
                    <div class="ms-3">
                        <h6 class="mb-0">Name : Jhon Doe</h6>
                        <span>Role : Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../template_based.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Template Based</a>
                    <a href="/CRUD/Distributor/distributor.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Tabel Distributor</a>
                    <a href="/CRUD/Buku/buku.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Tabel Buku</a>
                    <a href="/CRUD/Kasir/kasir.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Tabel Kasir</a>
                    <a href="/CRUD/Pasok/pasok.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Tabel Pasok</a>
                    <a href="/CRUD/Penjualan/penjualan.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Tabel Penjualan</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/CRUD/Distributor/distributor.php" class="dropdown-item">Distributor</a>
                            <a href="/CRUD/Buku/buku.php" class="dropdown-item">Buku</a>
                            <a href="../template_based.php" class="dropdown-item active">Template_Based</a>
                        </div>
                    </div> -->
                </div>
            </nav>
        </div>

        <script>
    // Fungsi untuk menambah kelas 'active' pada elemen navbar yang sesuai
    function setActiveNavItem() {
        var currentLocation = window.location.pathname; // Dapatkan URL halaman saat ini
        var navItems = document.querySelectorAll('.navbar-nav .nav-link'); // Ambil semua elemen navbar

        navItems.forEach(function(item) {
            if (item.getAttribute('href') === currentLocation) { // Jika href item sama dengan URL saat ini
                item.classList.add('active'); // Tambahkan kelas 'active'
            } else {
                item.classList.remove('active'); // Hapus kelas 'active' dari item yang tidak aktif
            }
        });
    }

    // Panggil fungsi setActiveNavItem() saat halaman dimuat
    window.onload = setActiveNavItem;
</script>