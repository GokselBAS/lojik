<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lojik Teknoloji</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favico.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Lojik Teknoloji<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Anasayfa</a></li>
              <li class="dropdown"><a href="index.html#hizmetlerimiz"><span>Hizmetlerimiz</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Görüntü Sistemleri</a></li>
                  <li><a href="#">Güvenlik Kamera Sistemleri</a></li>
                  <li><a href="#">Işık Sistemleri</a></li>
                  <li><a href="#">Ses Sistemleri</a></li>
                  <li><a href="#">Yangın Algılama Sistemi</a></li>
                  <li><a href="#">Hırsız Alarm Sistemi</a></li>
                  <li><a href="#">Data Network Sistemleri</a></li>
                </ul>
              </li>
          <li><a class="nav-link scrollto" href="index.html#about">Hakkımızda</a></li>
          <li><a class="nav-link scrollto" href="index.html#sikcasorulansorular">S.S.S</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">İletişim</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php
            if($_POST[id]==1){
            echo "Görüntü Sistemleri";
            }
            else{
            echo "Test Diğer";
            }
            ?></h2>
          <ol>
            <li><a href="index.html">Anasayfa</a></li>
            <li><a href="portfolio.html">Görüntü Sistemleri</a></li>
            <li>İçerik Detay</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

  <section id="hizmetlerimiz" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Hizmetlerimiz</h2>
          <p data-aos="fade-in">Lojik Teknoloji olarak, kalite, güvenilirlik ve müşteri odaklı yaklaşımı ön planda tutuyoruz. Sektördeki deneyimimiz ve uzman ekibimizle, ses ve güvenlik sistemlerinde öncü bir marka olmaktan gurur duyuyoruz.</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Data Network Sistemleri</a></h5>
                <p class="card-text">Veri iletişimi ve ağ performansında üst düzey sonuçlar elde etmek isteyen herkesi Lojik Teknoloji ailesine davet ediyoruz. Deneyimli ekibimiz ve güçlü altyapımızla, size en iyi data network çözümlerini sunmaktan mutluluk duyacağız."</p>
                <div class="read-more"><a href="icerikdetay.html"><i class="bi bi-arrow-right"></i> Devamına Git... </a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Ses Sistemleri</a></h5>
                <p class="card-text">Ticari mekanlar, eğitim kurumları, etkinlik alanları ve daha birçok sektör için ses sistemleri konusunda çeşitli çözümler sunmaktayız. Yüksek kaliteli hoparlörler, mikrofonlar, ses yönetim sistemleri ve daha fazlasıyla ihtiyaçlarınızı karşılamak için buradayız.</p>
               <div class="read-more"><a href="icerikdetay.html"><i class="bi bi-arrow-right"></i> Devamına Git...</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-3.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Güvenlik Kamera Sistemleri</a></h5>
                <p class="card-text">Güvenlik kamera sistemlerimiz, yüksek çözünürlük, geniş görüş açısı ve uzaktan erişim gibi özelliklerle donatılmıştır. Herhangi bir ölçekteki projelerde, işletmelerin özel ihtiyaçlarına uygun çözümler sunarak güvenliği sağlamaktayız.</p>
                <div class="read-more"><a href="icerikdetay.html"><i class="bi bi-arrow-right"></i> Devamına Git... </a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-4.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Işık Sistemleri</a></h5>
                <p class="card-text">Işık sistemlerimiz, enerji verimliliği, esneklik, renk seçenekleri ve uzun ömürlülük gibi özelliklerle donatılmıştır. Her türlü mekan için özel olarak tasarlanan işık sistemlerimiz, estetik ve işlevselliği bir araya getirmektedir.</p>
                <div class="read-more"><a href="icerikdetay.html"><i class="bi bi-arrow-right"></i> Devamına Git... </a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>LOJİK TEKNOLOJİ</h3>
            <p>"Teknolojiye Mantık Katmak".</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="E-Mail Adresinizi Giriniz"><input type="submit" value="Takip Et">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Devarge</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
        Designed by <a href="https://devarge.com/">Devarge</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
