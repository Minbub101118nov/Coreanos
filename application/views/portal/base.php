<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $nombre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/lightgallery.min.css">

    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/swiper.css">

    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('recursos-portal/');?>css/style.css">

  </head>
  <body>

  <div class="site-wrap">


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-3" role="banner">




      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">K-World<span class="text-primary">.</span></a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="<?php echo base_url('index.php/principal/'.$this->proy->PAGINA_INICIO);?>">Inicio</a></li>
                 <li> <a href="<?php echo base_url('index.php/principal/'.$this->proy->PAGINA_ARTISTAS);?>">Artistas</a></li>
                <li><a href="<?php echo base_url('index.php/principal/'.$this->proy->PAGINA_DORAMAS);?>">Doramas</a></li>
                <li><a href="<?php echo base_url('index.php/principal/'.$this->proy->PAGINA_ALBUMES);?>">Albumes</a></li>
				        <li><a href="<?php echo base_url('index.php/principal/'.$this->proy->PAGINA_GALERIA);?>">Galeria</a></li>
                <li><a href="<?php echo base_url('index.php/principal/'.$this->proy->PAGINA_CONTACT);?>">Contacto</a></li>
                  <li><a href="<?php echo base_url('index.php/principal/'.$this->proy->PAGINA_LOGIN);?>">Login</a></li>
              </ul>
                <?php
                  echo $menu_navegacion;
                 ?>
                
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
                
    </header>
      
      <?php echo $contenido; ?>
      
       <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Fotograp</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Services</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Me</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Me</a></li>
                  <li><a href="#">Terms</a></li>
                </ul>
              </div>
            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Follow Me</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>



          </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>




  </div>

  <script src="<?php echo base_url('recursos-portal/');?>js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/jquery-ui.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/popper.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/swiper.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/aos.js"></script>

  <script src="<?php echo base_url('recursos-portal/');?>js/picturefill.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/lightgallery-all.min.js"></script>
  <script src="<?php echo base_url('recursos-portal/');?>js/jquery.mousewheel.min.js"></script>

  <script src="<?php echo base_url('recursos-portal/');?>js/main.js"></script>

  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

  </body>
</html>
