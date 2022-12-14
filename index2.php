<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Neil Food Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio - v4.9.1
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="index2.php">Home</a></li>
            <li><a href="about2.php">About Me</a></li>
            <li><a href="works2.php">Works</a></li>
            <li><a href="contact2.php">Contact</a></li>
            <li><a class="getstarted scrollto" href="logout.php">LOGOUT</a></li>
          </ul>
        </div>
        <div class="col-md-6 d-none d-md-block  mr-auto">
          <div class="tweet d-flex">

            <div>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <p>Contact me with any questions, suggestions, comments or work-with-me ideas! I love to hear from you, and will get back to you asap!<br> <a href="#">neilanthony.prohibido@lspu.edu.ph</a></p>
        </div>
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Neil Food Blog</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>Hey, I'm Neil Anthony Prohibido</h2>
            <p class="mb-0">I love Food &amp; This is my Food Blog</p>
          </div>
          <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active">All</a>
              <a href="#" data-filter=".web">Main Dish</a>
              <a href="#" data-filter=".design">Cakes & Pastries</a>
              <a href="#" data-filter=".branding">Side Dish</a>
              <a href="#" data-filter=".photography">Coffee</a>
            </div>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/img_1.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/maindish1.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/maindish2.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/maindish3.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/maindish4.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/maindish5.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/img_2.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/img_3.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/img_4.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/pastry1.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/pastry2.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/pastry3.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/pastry4.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/pastry5.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/img_5.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/coffee1.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/coffee2.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/coffee3.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/coffee4.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/sidedish1.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/sidedish2.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/img_6.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4Grape Salad mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/sidedish3.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4Grape Salad mb-4">
            <a href="work-single.php" class="item-wrap fancybox">
              <div class="work-info">
              <i class="bi bi-pencil-square fs-3"></i>
              <i class="bi bi-trash-fill fs-3"></i>
                <span></span>
              </div>
              <img class="img-fluid" src="assets/img/sidedish4.jpg">
            </a>
          </div>
        </div>
      </div>
    </section><!-- End  Works Section -->

    
    <!-- ======= Testimonials Section ======= -->
    <section class="section pt-0">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Tastes great! <br>
                      Really good! <br>
                      Wow, [this food] is amazing!  <br>
                      Yummy.</p>
                  </blockquote>
                  <p>&mdash; Neil Anthony Prohibido</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Flavorful. <br>
                      Mouth-watering. <br> 
                      This [food] is too [flavor] for me/for my taste.  <br>
                      It could use a little more/less??? </p>
                  </blockquote>
                  <p>&mdash; Raina Gemanel</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright Neil Food Blog. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-end">
          <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-facebook"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
          <a href="#"><span class="bi bi-linkedin"></span></a>

        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>