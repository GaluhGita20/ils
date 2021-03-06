<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>ILS 2021 | <?php echo $page ?> </title>


    <!-- Favicon -->
    <link rel="shorcut icon" href="{{asset('../asset/logo/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('../asset/logo/favicon.ico')}}" type="image/x-icon">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">


    <!-- LinK Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">


    <!-- Vendor CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.css">
    <!-- <link href="../css/aos.css" rel="stylesheet"> -->
    <link href="../plugin/opins-icon/style.css" rel="stylesheet">

    <!-- Link Custom CSS -->
    <!-- <link href="../css/custom-2.css" rel="stylesheet"> -->
    <link href="../css/custom.css" rel="stylesheet">
    

    <!-- Vendor JS -->
    <!-- <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> -->
  </head>
  
  <body>
    <main>
      <section class="main-banner" id="hero">
        <div class="heroText">
          <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">Interpersonal & Life Skill</h1>
          <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">Teknologi Informasi <strong class="custom-underline">ILS 2021</strong></p>
        </div>
        <div class="videoWrapper">
          <video autoplay="" loop="" muted="" class="custom-video" poster="videos/792bd98f3e617786c850493560e11c45.jpg">
            <source src="../asset/videos/banner.mp4" type="video/mp4">Your browser does not support the video tag.
          </video>
        </div>
        <div class="overlay"></div>
      </section>

      @include('components.navbar-home')

      
      @yield('content')

      
    <!-- instagram feed -->
      <div class="instagram" id="instagram" style="margin-bottom: 100px;">
        <div class="container">
          <!-- <a href="#" class="btn btn-default btn-instagram"><span style="font-weight: 600;">Gallery</span></a> -->
          <!-- images -->
          <div class="instagram-feed d-flex flex-wrap">
            <div class="insta-item col-sm-2 col-6 col-md-2">
              <a href="#">
                <img src="../asset/images/insta/insta-1.jpg" alt="insta-title" />
              </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
              <a href="#">
                <img src="../asset/images/insta/insta-2.jpg" alt="insta-title" />
              </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
              <a href="#">
                <img src="../asset/images/insta/insta-3.jpg" alt="insta-title" />
              </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
              <a href="#">
                <img src="../asset/images/insta/insta-4.jpg" alt="insta-title" />
              </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
              <a href="#">
                <img src="../asset/images/insta/insta-5.jpg" alt="insta-title" />
              </a>
            </div>
            <div class="insta-item col-sm-2 col-6 col-md-2">
              <a href="#">
                <img src="../asset/images/insta/insta-6.jpg" alt="insta-title" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <section class="other-sites">
        <div class="container">
          <div class="row content justify-content-center" style="align-items: center;">
            <div class="col-lg-4 col-12 text-center text justify-content-center" style="align-items: center;">
              <p><a class="text-decoration-none text-white" href="#">Ministry of Tourism and Creative Economy<br><span> Republic of Indonesia</span></a>
              </p>
            </div>
            <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
            <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
            <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h5 class="text-white">
              <!-- <i class="bi-geo-alt-fill me-2"></i> -->
              Interpersonal & Life Skill</h5>
            <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">IT 2021</a>
          </div>
          <div class="col-6">
            <p class="copyright-text mb-0">Copyright ??ILS-TI 2021
            <br><br>Design: <a href="https://templatemo.com/page/1" target="_parent">ILS 2021</a></p>
          </div>
          <div class="col-lg-3 col-5 ms-auto">
            <ul class="social-icon">
              <li><a href="#" class="social-icon-link bi-facebook"></a></li>
              <li><a href="#" class="social-icon-link bi-twitter"></a></li>
              <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
              <li><a href="#" class="social-icon-link bi-instagram"></a></li>
              <li><a href="#" class="social-icon-link bi-youtube"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mx-0 pt-5 mb-n4 footer-text mt-5 justify-content-center align-items-center" style="border-top: #112443 solid 2px ;">
        <div class="col-9 text-center">
          <div class="container">
            <p class="explanation mx-n4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga incidunt consequuntur accusamus, et possimus omnis blanditiis perferendis. Sint nam nobis perspiciatis. Asperiores cumque voluptatem voluptate incidunt adipisci ab reprehenderit officiis!</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="color-switcher">
      <div class="switcher-btn">
        <i class="fas fa-cog"></i>
      </div>
      <h3>Chose a theme</h3>
      <div class="theme-buttons-container">
        <span class="theme-buttons" data-color="#091426" data-color-font="#fefefe" style="background: #091426;"></span>
        <span class="theme-buttons" data-color="#fefefe" data-color-font="#091426" style="background: #fefefe;"></span>
        <span class="theme-buttons" data-color="#f39c12" data-color-font="#fefefe" style="background: #f39c12;"></span>
        <span class="theme-buttons" data-color="#27ae60" data-color-font="#fefefe" style="background: #27ae60;"></span>
        <span class="theme-buttons" data-color="#ae2027" data-color-font="#fefefe" style="background: #ae2027;"></span>
        <span class="theme-buttons" data-color="#e84393" style="background: #e84393;"></span>
        <span class="theme-buttons" data-color="#ff4757" style="background: #ff4757;"></span>
        <span class="theme-buttons" data-color="#ffc312" style="background: #ffc312;"></span>
        <span class="theme-buttons" data-color="#17c0eb" style="background: #17c0eb;"></span>
      </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/aos.js"></script>

    <!-- VENDOR JS -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>
    <script src="../js/js/jquery.bxslider.min.js"></script>
    <script src="../plugin/isotope/isotope.pkgd.min.js"></script>
    <script src="../plugin/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.js"></script>
    <!-- <script src="js/scrollspy.min.js"></script> -->
    
    <script>
      $(document).ready(function(){
        $('.venobox').venobox({
          closeColor:'#f4f4f4',
          spinColor: '#f4f4f4',
          arowsColor: 'f4f4f4',
          closeBackground: '#17191D',
          overlayColor: 'rgba(23,25,29,0.8)'
        });
      });
    </script>
    <!-- <script src="../js/js/waypoints.min.js"></script>
    <script src="../js/js/jquery.easing.min.js"></script>
    <script src="../js/js/jquery.counterup.min.js"></script>
    <script src="../js/js/wow.js"></script> -->
    <script src="../js/custom.js"></script>

  </body>
</html>