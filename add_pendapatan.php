<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambah Pendapatan - e-Galeria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i>
                        <a href="#" class="text-white">Yogyakarta</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">egaleria@gmail.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white ms-2">About Us</small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.php" class="navbar-brand">
                    <h1 class="text-primary display-6">e-Galeria</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.php" class="nav-item nav-link active">Beranda</a>
                        <a href="galeri-online.php" class="nav-item nav-link">Galeri Online</a>
                        <a href="dashboard.php" class="nav-item nav-link">Dashboard</a>
                        <a href="chatbot.php" class="nav-item nav-link">ChatBot</a>
                        <a href="contact1.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="d-flex m-3 me-0">
                        <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="fas fa-search text-primary"></i>
                        </button>
                        <a href="#" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px">3</span>
                        </a>
                        <a href="#" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Tambah Pendapatan</h1>
    </div>

    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Tambah Hasil Pendapatan</h1>
            <div>
                <a href="dashboard.php" class="btn btn-primary">Back</a>
            </div>
        </header>

        <form action="" method="post">
            <div class="mb-3">
                <label for="id_pendapatan" class="form-label">ID Pendapatan</label>
                <input type="text" class="form-control" id="id_pendapatan" name="id_pendapatan" placeholder="ID : " required>
            </div>
            <div class="mb-3">
                <label for="hari_pendapatan" class="form-label">Hari Pendapatan</label>
                <input type="text" class="form-control" id="hari_pendapatan" name="hari_pendapatan" placeholder="Hari : " required>
            </div>
            <div class="mb-3">
                <label for="order_pendapatan" class="form-label">Order Pendapatan</label>
                <input type="text" class="form-control" id="order_pendapatan" name="order_pendapatan" placeholder="Order : " required>
            </div>
            <div class="mb-3">
                <label for="hasil_pendapatan" class="form-label">Hasil Pendapatan</label>
                <textarea class="form-control" id="hasil_pendapatan" name="hasil_pendapatan" placeholder="Pendapatan :" required></textarea>
            </div>
            <button type="submit" name="buat" class="btn btn-primary">Tambah Pendapatan</button>
        </form>

        <?php
        include "koneksi.php";

        if (isset($_POST['buat'])) {
            // Using prepared statements to prevent SQL injection
            $stmt = $koneksi->prepare("INSERT INTO laporanpendapatan (id_pendapatan, hari_pendapatan, order_pendapatan, hasil_pendapatan) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $_POST['id_pendapatan'], $_POST['hari_pendapatan'], $_POST['order_pendapatan'], $_POST['hasil_pendapatan']);

            if ($stmt->execute()) {
                echo "<div class='alert alert-success'>Data Pendapatan telah tersimpan</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
            }

            $stmt->close();
        }
        ?>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/pages/ecommerce-index.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>