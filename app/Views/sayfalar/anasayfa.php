<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico'); ?>" />
        <!-- Font Awesome icons (free version) -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap) -->
        <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" />
    </head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url(); ?>">DR.TURGUT EREN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url(); ?>">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('hakkinda.php'); ?>">Hakkinda</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('ornekyazi.php'); ?>">Örnek Yazı</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('iletisim.php'); ?>">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href=" <?= base_url('giris.php'); ?>" >Giriş</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('<?= base_url('/assets/img/home-bg.jpg'); ?>')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>TEZLERİM HAKKINDA</h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="<?= base_url('ornekyazi.php'); ?>">
                        <h2 class="post-title">İnsan keşfetmelidir ve bu, keşfin en üst noktasıdır</h2>
                        <h3 class="post-subtitle">Sorunlar 150 mil yukarıdan bakıldığında çok küçük görünüyor</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 24, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="<?= base_url('ornekyazi.php'); ?>"><h2 class="post-title">Her insanın sınırlı sayıda kalp atışı olduğuna inanıyorum. Hiçbirini boşa harcamayı düşünmüyorum.</h2></a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 18, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="<?= base_url('ornekyazi.php'); ?>">
                        <h2 class="post-title">Bilim henüz kehanet konusunda ustalaşamadı</h2>
                        <h3 class="post-subtitle">Önümüzdeki yıl için çok fazla öngörüde bulunuyoruz, ancak önümüzdeki on yıl için çok az öngörüde bulunuyoruz.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on August 24, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="<?= base_url('ornekyazi.php'); ?>">
                        <h2 class="post-title">Başarısızlık bir seçenek değil</h2>
                        <h3 class="post-subtitle">Birçok kişi keşfin kaderimizin bir parçası olduğunu söylüyor ama aslında bu gelecek nesillere karşı görevimiz.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on July 8, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
               
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="<?= base_url('/assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('/assets/js/scripts.js'); ?>"></script>
</body>
</html>

