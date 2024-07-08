<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chatbot Page - e-Galeria</title>
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

    <!-- Chatbot Stylesheet -->
    <style>
        .chat-container {
            max-width: 400px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .chat-box {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
        }

        .chat-box .message {
            margin: 10px 0;
            display: flex;
            justify-content: flex-start;
        }

        .chat-box .message.user {
            justify-content: flex-end;
        }

        .chat-box .message .content {
            max-width: 70%;
            padding: 10px;
            border-radius: 10px;
            background: #f1f1f1;
        }

        .chat-box .message.user .content {
            background: #007bff;
            color: #fff;
        }

        .chat-input {
            display: flex;
            margin-top: 10px;
        }

        .chat-input input {
            flex: 1;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-right: 10px;
        }

        .chat-input button {
            padding: 10px 15px;
            border-radius: 10px;
            border: none;
            background: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

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
                        <a href="index.php" class="nav-item nav-link ">Beranda</a>
                        <a href="galeri-online.php" class="nav-item nav-link">Galeri Online</a>
                        <a href="dashboard.php" class="nav-item nav-link">Dashboard</a>
                        <a href="chatbot.php" class="nav-item nav-link active">Chatbot</a>
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
        <h1 class="text-center text-white display-6">Chatbot LLM</h1>
        <h3 class="text-center">Yuk Tanya Ke Chabot Kami Dibawah Ini, Untuk Mencari Apa yang Sesuai dengan Preferensi Kamu</h3>
    </div>

    <!-- Chatbot Section Start -->
    <div class="container py-5">
        <div class="chat-container">
            <div class="chat-box" id="chatBox"></div>
            <h1 class="h4 text-center">Ajukan Pertanyaan ke LLM e-Galeria</h1>
            <form method="post" action="" class="mt-4">
                <div class="mb-3">
                    <label for="question" class="form-label">Masukkan Pertanyaan:</label>
                    <input type="text" id="question" name="question" class="form-control" required>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Kirim" class="btn btn-primary">
                </div>
            </form>

            <?php
            require 'vendor/autoload.php';

            use LucianoTonet\GroqPHP\Groq;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $question = htmlspecialchars($_POST['question']);

                try {
                    $groq = new Groq('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');

                    $chatCompletion = $groq->chat()->completions()->create([
                        'model'    => 'mixtral-8x7b-32768',
                        'messages' => [
                            [
                                'role'    => 'user',
                                'content' => 'jawab dalam bahasa indonesia' . $question
                            ],
                        ]
                    ]);

                    echo "<h2>Jawaban:</h2>";
                    echo "<p>" . $chatCompletion['choices'][0]['message']['content'] . "</p>";
                } catch (Exception $e) {
                    echo 'Kesalahan: ' . $e->getMessage();
                }
            }
            ?>
        </div>
    </div>
    <!-- Chatbot Section End -->

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

    <!-- Chatbot Javascript -->
</body>

</html>
