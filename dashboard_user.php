<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard e-Galeria</title>
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

    <!-- Custom Styles -->
    <style>
        .bar-chart-container {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }
        .chart-container {
            width: 100%;
            max-width: 300px;
            margin: auto;
        }
        .table-responsive {
            width: 100%;
        }
        .table {
            width: 100%;
            max-width: 100%;
        }
        .full-width-table {
            width: 100%;
            margin: auto;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
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
                        <a href="index.php" class="nav-item nav-link ">Beranda</a>
                        <a href="galeri-online.php" class="nav-item nav-link">Galeri Online</a>
                        <a href="dashboard.php" class="nav-item nav-link active">Dashboard</a>
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

    <!-- H1 -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Dashboard Penikmat Seni</h1>
    </div>

    <div class="container-fluid py-4">
        <div class="row mb-4">
            <?php
            include "koneksi.php";
            $query_total = "SELECT 
                            SUM(jumlah_pembelian) AS total_pembelian
                            FROM userpembelian";
            $result_total = mysqli_query($koneksi, $query_total);
            $row_total = mysqli_fetch_assoc($result_total);
            $total_pembelian = number_format($row_total['total_pembelian'], 0, ',', '.');
            ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col align-self-center">
                                <div class="media">
                                    <div class="media-body align-self-center ms-3">
                                        <h6 class="m-0 font-24 fw-bold"><?php echo $total_pembelian; ?></h6>
                                        <p class="text-muted mb-0">Total Pembelian</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Pembelian</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bar-chart-container">
                        <canvas id="pendapatanChart"></canvas>
                        <?php
                        $query_pembelian = "SELECT hari_pembelian, SUM(jumlah_pembelian) AS total_pembelian FROM userpembelian GROUP BY hari_pembelian";
                        $result_pembelian = mysqli_query($koneksi, $query_pembelian);

                        $hari_pembelian = [];
                        $total_pembelian = [];

                        while ($row_pembelian = mysqli_fetch_assoc($result_pembelian)) {
                            $hari_pembelian[] = $row_pembelian['hari_pembelian'];
                            $total_pembelian[] = (int) $row_pembelian['total_pembelian'];
                        }

                        $hari_pembelian_json = json_encode($hari_pembelian);
                        $total_pembelian_json = json_encode($total_pembelian);
                        ?>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const ctxBar = document.getElementById('pendapatanChart').getContext('2d');
                            const colors = [
                                'rgba(249, 65, 68)',
                                'rgba(243, 114, 44)',
                                'rgba(248, 150, 30)',
                                'rgba(249, 199, 79)',
                                'rgba(249, 199, 79)',
                                'rgba(144, 190, 109)'
                            ];
                            const borderColors = [
                                'rgba(249, 65, 68)',
                                'rgba(243, 114, 44)',
                                'rgba(248, 150, 30)',
                                'rgba(249, 199, 79)',
                                'rgba(249, 199, 79)',
                                'rgba(144, 190, 109)'
                            ];
                            const chartDataBar = {
                                labels: <?php echo $hari_pembelian_json; ?>,
                                datasets: [{
                                    label: 'Total Pembelian',
                                    data: <?php echo $total_pembelian_json; ?>,
                                    backgroundColor: colors,
                                    borderColor: borderColors,
                                    borderWidth: 1
                                }]
                            };

                            const configBar = {
                                type: 'bar',
                                data: chartDataBar,
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            };

                            new Chart(ctxBar, configBar);
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Laporan Pembelian</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive full-width-table">
                            <form method="post" action="your_action_page.php">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nama Lukisan</th>
                                            <th class="border-top-0">Gambar</th>
                                            <th class="border-top-0">Hari</th>
                                            <th class="border-top-0">Harga</th>
                                            <th class="border-top-0">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = mysqli_query($koneksi, "SELECT * FROM userpembelian ORDER BY id_pembelian ASC");
                                        while ($row = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row["id_pembelian"]; ?></td>
                                                <td><?php echo $row["nama_pembelian"]; ?></td>
                                                <td><img src="img/<?php echo $row["gambar_pembelian"]; ?>" alt="Gambar Pembelian" width="100"></td>
                                                <td><?php echo $row["hari_pembelian"]; ?></td>
                                                <td><?php echo $row["harga_pembelian"]; ?></td>
                                                <td><?php echo $row["jumlah_pembelian"]; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/pages/ecommerce-index.init.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
