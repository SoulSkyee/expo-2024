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
        max-width: 600px; /* Sesuaikan lebar sesuai kebutuhan Anda */
        margin: auto;
    }
    .chart-container {
        width: 100%;
        max-width: 300px; /* Tetap biarkan ukuran yang lebih kecil untuk pie chart */
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
        <h1 class="text-center text-white display-6">Dashboard Seniman</h1>
    </div>

    <div class="container-fluid py-4">
        <div class="row mb-4">
            <?php
            include "koneksi.php";
            $query_total = "SELECT 
                            SUM(REPLACE(REPLACE(hasil_pendapatan, 'Rp ', ''), '.', '')) AS total_pendapatan,
                            SUM(order_pendapatan) AS total_order 
                            FROM laporanpendapatan";
            $result_total = mysqli_query($koneksi, $query_total);
            $row_total = mysqli_fetch_assoc($result_total);
            $total_pendapatan = number_format($row_total['total_pendapatan'], 0, ',', '.');
            $total_order = $row_total['total_order'];
            ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col align-self-center">
                                <div class="media">
                                    <div class="media-body align-self-center ms-3">
                                        <h6 class="m-0 font-24 fw-bold">Rp. <?php echo $total_pendapatan; ?></h6>
                                        <p class="text-muted mb-0">Total Pendapatan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="h5 fw-bold"><?php echo $total_order; ?></span>
                                <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Total Order</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="h5 fw-bold">3</span>
                                <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Order Hari Ini</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="row mb-4">
    <div class="col-lg-6 mb-4">
        <div class="card h-100">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Pendapatan</h4>
                    </div>
                </div>
            </div>
            <div class="card-body bar-chart-container"> <!-- Ubah kelas di sini -->
                <canvas id="pendapatanChart"></canvas>
                <?php
                $query_pendapatan = "SELECT hari_pendapatan, REPLACE(REPLACE(hasil_pendapatan, 'Rp ', ''), '.', '') AS hasil_pendapatan FROM laporanpendapatan";
                $result_pendapatan = mysqli_query($koneksi, $query_pendapatan);

                $hari_pendapatan = [];
                $hasil_pendapatan = [];

                while ($row_pendapatan = mysqli_fetch_assoc($result_pendapatan)) {
                    $hari_pendapatan[] = $row_pendapatan['hari_pendapatan'];
                    $hasil_pendapatan[] = (int) $row_pendapatan['hasil_pendapatan'];
                }

                $hari_pendapatan_json = json_encode($hari_pendapatan);
                $hasil_pendapatan_json = json_encode($hasil_pendapatan);
                ?>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ctxBar = document.getElementById('pendapatanChart').getContext('2d');
                    const colors = [
                        'rgba(247, 37, 133)',
                        'rgba(114, 9, 183)',
                        'rgba(58, 12, 163)',
                        'rgba(67, 97, 238)',
                        'rgba(76, 201, 240)',
                        'rgba(255, 209, 102)'
                    ];
                    const borderColors = [
                        'rgba(142, 202, 230)',
                        'rgba(114, 9, 183)',
                        'rgba(58, 12, 163)',
                        'rgba(67, 97, 238)',
                        'rgba(76, 201, 240)',
                        'rgba(255, 209, 102)'
                    ];
                    const chartDataBar = {
                        labels: <?php echo $hari_pendapatan_json; ?>,
                        datasets: [{
                            label: 'Pendapatan',
                            data: <?php echo $hasil_pendapatan_json; ?>,
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
            <div class="col-lg-6 mb-4">
        <div class="card h-100">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Orders</h4>
                    </div>
                </div>
            </div>
            <div class="card-body chart-container">
                <canvas id="ordersPieChart" width="300" height="300"></canvas>
                <?php
                $query_orders = "SELECT hari_pendapatan, order_pendapatan FROM laporanpendapatan";
                $result_orders = mysqli_query($koneksi, $query_orders);

                $hari_orders = [];
                $orders = [];

                while ($row_orders = mysqli_fetch_assoc($result_orders)) {
                    $hari_orders[] = $row_orders['hari_pendapatan'];
                    $orders[] = (int) $row_orders['order_pendapatan'];
                }

                $hari_orders_json = json_encode($hari_orders);
                $orders_json = json_encode($orders);
                ?>
                <script>
                    const ctxPie = document.getElementById('ordersPieChart').getContext('2d');
                    const pieConfig = {
                        type: 'pie',
                        data: {
                            labels: <?php echo $hari_orders_json; ?>,
                            datasets: [{
                                data: <?php echo $orders_json; ?>,
                                backgroundColor: colors,
                                borderColor: borderColors,
                                borderWidth: 1
                            }]
                        }
                    };

                    new Chart(ctxPie, pieConfig);
                </script>
            </div>
        </div>
    </div>
</div>
        <div class="row mb-4">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Laporan Pendapatan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="post" action="your_action_page.php">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="border-top-0">No.</th>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Hari</th>
                                            <th class="border-top-0">Order</th>
                                            <th class="border-top-0">Pendapatan</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT * FROM laporanpendapatan ORDER BY id_pendapatan ASC");
                                        while ($row = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row["id_pendapatan"]; ?></td>
                                                <td><?php echo $row["hari_pendapatan"]; ?></td>
                                                <td><?php echo $row["order_pendapatan"]; ?></td>
                                                <td><?php echo $row["hasil_pendapatan"]; ?></td>
                                                <td>
                                                    <a href="edit_pendapatan.php?id_pendapatan=<?php echo $row['id_pendapatan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="delete_pendapatan.php?id_pendapatan=<?php echo $row['id_pendapatan']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <a href="add_pendapatan.php" class="btn btn-primary">Tambah Pendapatan</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Karya Terjual</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="post" action="your_action_page.php">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="border-top-0">Karya</th>
                                            <th class="border-top-0">Gambar</th>
                                            <th class="border-top-0">Harga</th>
                                            <th class="border-top-0">Deskripsi</th>
                                            <th class="border-top-0">Status</th>  
                                            <th class="border-top-0">Action</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM karyaterjual ORDER BY id_karya ASC");
                                while ($row = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>    
                                        <td><?php echo $row["nama_karya"]; ?></td>
                                        <td><img src="img/<?php echo $row["gambar_karya"]; ?>" alt="Gambar Karya" width="100"></td>
                                        <td><?php echo $row["harga_karya"]; ?></td>
                                        <td>
                                            <?php 
                                                $max_length = 50; // Maximum length before adding ...
                                                $description = $row["deskripsi_karya"];
                                                if (strlen($description) > $max_length) {
                                                    $description = substr($description, 0, $max_length) . '...';
                                                }
                                                echo $description;
                                            ?>
                                        </td>
                                         <td><?php echo $row["status_karya"]; ?></td>
                                        <td>
                                            <a href="delete_karya.php?id_karya=<?php echo $row['id_karya']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
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
