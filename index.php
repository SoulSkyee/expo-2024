<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>e-Galeria</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
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

  <!-- Modal Search Start -->
  <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Cari Karya/Seniman
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center">
          <div class="input-group w-75 mx-auto d-flex">
            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1" />
            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Search End -->

  <!-- Hero Start -->
  <div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
      <div class="row g-5 align-items-center">
        <div class="col-md-12 col-lg-7">
          <h1 class="mb-5 display-3 text-primary">
            Yuk Dukung Karya Seniman Lokal!
          </h1>
          <div class="position-relative mx-auto">
            <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" />
            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%">
              Search
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-5">
          <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active rounded">
                <img src="img/hero-img-1.jpg" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide" />
                <a href="#" class="btn px-4 py-2 text-white rounded">Raden Saleh</a>
              </div>
              <div class="carousel-item rounded">
                <img src="img/hero-img-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide" />
                <a href="#" class="btn px-4 py-2 text-white rounded">Nyoman Nuarta</a>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Featurs Section Start -->
  <div class="container-fluid featurs py-5">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="featurs-item text-center rounded bg-light p-4">
            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
              <i class="fas fa-car-side fa-3x text-white"></i>
            </div>
            <div class="featurs-content text-center">
              <h5>Gratis Ongkir</h5>
              <p class="mb-0">Gratis ongkos kirim buat produk tertentu</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="featurs-item text-center rounded bg-light p-4">
            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
              <i class="fas fa-user-shield fa-3x text-white"></i>
            </div>
            <div class="featurs-content text-center">
              <h5>Pembayaran Terpercaya</h5>
              <p class="mb-0">100% Pembayaran aman</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="featurs-item text-center rounded bg-light p-4">
            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
              <i class="fas fa-star fa-3x text-white"></i>
            </div>
            <div class="featurs-content text-center">
              <h5>Edisi Terbatas</h5>
              <p class="mb-0">Banyak karya yang dibuat untuk edisi terbatas</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="featurs-item text-center rounded bg-light p-4">
            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
              <i class="fa fa-phone-alt fa-3x text-white"></i>
            </div>
            <div class="featurs-content text-center">
              <h5>24/7 Support</h5>
              <p class="mb-0">Masih bingung? Yuk chat admin</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featurs Section End -->

  <!-- Fruits Shop Start-->
  <div class="container-fluid galeri py-5">
    <div class="container py-5">
      <div class="tab-class text-center">
        <div class="row g-4">
          <div class="col-lg-4 text-start">
            <h1>Nih Karya Seniman Kita!</h1>
          </div>
          <div class="col-lg-8 text-end">
            <ul class="nav nav-pills d-inline-flex text-center mb-5">
              <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                  <span class="text-dark" style="width: 130px">Semua Produk</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                  <span class="text-dark" style="width: 130px">Lukisan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                  <span class="text-dark" style="width: 130px">Lukisan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                  <span class="text-dark" style="width: 130px">Lukisan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                  <span class="text-dark" style="width: 130px">Lukisan</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-content">
          <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
              <div class="col-lg-12">
                <div class="row g-4">
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-6.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Raden Saleh</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-5.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Raden Saleh</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-2.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Nyoman Nuarta</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-4.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Nyoman Nuarta</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-3.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Seniman</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-1.png" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Seniman</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-2.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Nyoman Nuarta</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-5.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Raden Saleh</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-lg-12">
                <div class="row g-4">
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-5.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Raden Saleh</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-2.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Nyoman Nuarta</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-lg-12">
                <div class="row g-4">
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-1.png" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Seniman</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-6.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Apple</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-lg-12">
                <div class="row g-4">
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-5.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Raden Saleh</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-4.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Nyoman Nuarta</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-5" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-lg-12">
                <div class="row g-4">
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-3.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Seniman</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-2.jpg" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Nyoman Nuarta</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="rounded position-relative galeri-item">
                      <div class="galeri-img">
                        <img src="img/galeri-item-1.png" class="img-fluid w-100 rounded-top" alt="" />
                      </div>
                      <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                        Lukisan
                      </div>
                      <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4>Seniman</h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit sed do eiusmod te incididunt
                        </p>
                        <div class="d-flex my-3">
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star text-primary"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fs-5 fw-bold mb-0">
                            Rp.50.000.000,00
                          </p>
                          <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
                            Tambah ke Keranjang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fruits Shop End-->

  <!-- Vesitable Shop Start-->
  <div class="container-fluid vesitable py-5">
    <div class="container py-5">
      <h1 class="mb-0">Karya Terbaru</h1>
      <div class="owl-carousel vegetable-carousel justify-content-center">
        <div class="border border-primary rounded position-relative vesitable-item">
          <div class="vesitable-img">
            <img src="img/galeri-item-6.jpg" class="img-fluid w-100 rounded-top" alt="" />
          </div>
          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">
            Lukisan
          </div>
          <div class="p-4 rounded-bottom">
            <h4>Seniman</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
              eiusmod te incididunt
            </p>
            <div class="d-flex my-3">
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
              <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000.000,00</p>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
          <div class="vesitable-img">
            <img src="img/galeri-item-1.png" class="img-fluid w-100 rounded-top" alt="" />
          </div>
          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">
            Lukisan
          </div>
          <div class="p-4 rounded-bottom">
            <h4>Seniman</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
              eiusmod te incididunt
            </p>
            <div class="d-flex my-3">
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
              <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000.000,00</p>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
          <div class="vesitable-img">
            <img src="img/galeri-item-3.jpg" class="img-fluid w-100 rounded-top bg-light" alt="" />
          </div>
          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">
            Lukisan
          </div>
          <div class="p-4 rounded-bottom">
            <h4>Seniman</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
              eiusmod te incididunt
            </p>
            <div class="d-flex my-3">
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
              <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000.000,00</p>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
          <div class="vesitable-img">
            <img src="img/galeri-item-4.jpg" class="img-fluid w-100 rounded-top" alt="" />
          </div>
          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">
            Lukisan
          </div>
          <div class="p-4 rounded-bottom">
            <h4>Seniman</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
              eiusmod te incididunt
            </p>
            <div class="d-flex my-3">
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
              <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000.000,00</p>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
          <div class="vesitable-img">
            <img src="img/galeri-item-5.jpg" class="img-fluid w-100 rounded-top" alt="" />
          </div>
          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">
            Lukisan
          </div>
          <div class="p-4 rounded-bottom">
            <h4>Seniman</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
              eiusmod te incididunt
            </p>
            <div class="d-flex my-3">
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
              <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000.000,00</p>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
          <div class="vesitable-img">
            <img src="img/galeri-item-6.jpg" class="img-fluid w-100 rounded-top" alt="" />
          </div>
          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">
            Lukisan
          </div>
          <div class="p-4 rounded-bottom">
            <h4>Seniman</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
              eiusmod te incididunt
            </p>
            <div class="d-flex my-3">
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
              <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000.000,00</p>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
          <div class="vesitable-img">
            <img src="img/galeri-item-5.jpg" class="img-fluid w-100 rounded-top" alt="" />
          </div>
          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">
            Lukisan
          </div>
          <div class="p-4 rounded-bottom">
            <h4>Seniman</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
              eiusmod te incididunt
            </p>
            <div class="d-flex my-3">
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
              <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000.000,00</p>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
          <div class="vesitable-img">
            <img src="img/galeri-item-6.jpg" class="img-fluid w-100 rounded-top" alt="" />
          </div>
          <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">
            Lukisan
          </div>
          <div class="p-4 rounded-bottom">
            <h4>Seniman</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
              eiusmod te incididunt
            </p>
            <div class="d-flex my-3">
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star text-primary"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
              <p class="text-dark fs-5 fw-bold mb-0">Rp.50.000.000,00</p>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Vesitable Shop End -->

  <div class="container-fluid banner bg-secondary my-5">
    <div class="container py-5">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="py-4">
            <h1 class="display-3 text-white">Lukisan Bersejarah</h1>
            <p class="fw-normal display-3 text-dark mb-4">di e-Galeria</p>
            <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
            <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Beli</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="position-relative">
            <img src="img/galeri-item-6.jpg" class="img-fluid w-100 rounded" alt="">
            <div class="d-flex flex-column">
              <div class="d-flex my-3">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
              </div>
              <span class="text-dark fs-5 fw-bold mb-0">Rp.250.000.000,00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Section End -->

  <!-- Bestsaler Product Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="text-center mx-auto mb-5" style="max-width: 700px">
        <h1 class="display-4">Karya Seni Terpopuler</h1>
        <p>
          Lorem ipsum
        </p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="text-center">
            <img src="img/galeri-item-1.png" class="img-fluid rounded" alt="" />
            <div class="py-4">
              <a href="#" class="h5">Seniman</a>
              <div class="d-flex my-3 justify-content-center">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="mb-3">Rp.50.000.000,00</h4>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="text-center">
            <img src="img/galeri-item-2.jpg" class="img-fluid rounded" alt="" />
            <div class="py-4">
              <a href="#" class="h5">Seniman</a>
              <div class="d-flex my-3 justify-content-center">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="mb-3">Rp.50.000.000,00</h4>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="text-center">
            <img src="img/galeri-item-3.jpg" class="img-fluid rounded" alt="" />
            <div class="py-4">
              <a href="#" class="h5">Seniman</a>
              <div class="d-flex my-3 justify-content-center">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="mb-3">Rp.50.000.000,00</h4>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="text-center">
            <img src="img/galeri-item-4.jpg" class="img-fluid rounded" alt="" />
            <div class="py-2">
              <a href="#" class="h5">Seniman</a>
              <div class="d-flex my-3 justify-content-center">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="mb-3">Rp.50.000.000,00</h4>
              <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Tambah ke Keranjang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bestsaler Product End -->

  <!-- Fact Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="bg-light p-5 rounded">
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="counter bg-white rounded p-5">
              <i class="fa fa-users text-secondary"></i>
              <h4>satisfied customers</h4>
              <h1>1963</h1>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="counter bg-white rounded p-5">
              <i class="fa fa-users text-secondary"></i>
              <h4>quality of service</h4>
              <h1>99%</h1>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="counter bg-white rounded p-5">
              <i class="fa fa-users text-secondary"></i>
              <h4>quality certificates</h4>
              <h1>33</h1>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="counter bg-white rounded p-5">
              <i class="fa fa-users text-secondary"></i>
              <h4>Available Products</h4>
              <h1>789</h1>
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

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>