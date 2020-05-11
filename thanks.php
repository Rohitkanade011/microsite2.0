<?php require "functions.php"; $thanksStutus="floorplan"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New Template 2.0</title>
    <?php loadCSS("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", "./assets/css/bootstrap.css"); ?>
    <link rel="stylesheet" href="./assets/css/thanks.css" />

    <!-- Plugins -->
    <?php lazyLoadCSS("https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css", "./assets/plugins/OwlCarousel/owl.carousel.css"); ?>
    <?php lazyLoadCSS("https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css", "./assets/plugins/OwlCarousel/owl.theme.default.css"); ?>
    <?php lazyLoadCSS("", "./assets/plugins/OwlCarousel/app.css"); ?>
    <?php lazyLoadCSS("", "./assets/plugins/animate/animate.min.css"); ?>

    <!-- Style -->
    <?php lazyLoadCSS("", "./design/amenities/amenities-1.css"); ?>
    
    <!-- Conversion Codes -->
</head>

<body data-spy="scroll" data-target="#navbarNav">
    
    <div id="loader"><span class="loader-text"><img src="http://shapoorjivicinia.com/assets/img/Vicinialogo.svg" class="loader-logo"></span></div>

    <header class="micro-nav fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white micro-navbar">
          <a class="navbar-brand" href="index.php" onclick="return false"><img src="http://shapoorjivicinia.com/assets/img/Vicinialogo.svg" class="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-fill">
              <li class="nav-item"><a class="nav-link" href="index.php#home"><span class="mi mi-home nav-icon"></span> Home</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#pricing"><span class="mi mi-price nav-icon"></span> Price</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#sitefloorplan"><span class="mi mi-siteplan nav-icon"></span> Site &amp; Floor Plan</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#amenities"><span class="mi mi-ami nav-icon"></span> Amenities</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#gallery"><span class="mi mi-gallery nav-icon"></span> Gallery</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#location"><span class="mi mi-location nav-icon"></span> Location</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#sitevisit"><span class="mi mi-sitevisit nav-icon"></span> Virtual Site Tour</a></li>
              <li class="nav-item d-none d-md-inline-block"><a class="nav-link" href="tel:+919167757310"><span class="mi mi-call nav-icon d-inline-block animated infinite shakeX slow"></span> Call: +919167757310</a></li>
              <li class="nav-item d-none d-md-inline-block"><a class="nav-link" href="https://api.whatsapp.com/send?phone=919167757370&text=test wahtasapp msg" target="_blank"><span class="mi mi-whatsapp nav-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> WhatsApp Now</a></li>
            </ul>
          </div>
        </nav>
    </header>
    <main>

        <div class="d-md-flex flex-row flex-md-row-reverse main-container">
          <?php if(isset($_GET['share'])){ ?>
          <div class="d-flex flex-fill bg-white thanks-block text-center flex-column justify-content-center align-items-center">
            <img src="assets/img/comman/thanks-expire.svg" class="thanks-icon">
            <span class="thanks-title font-weight-bold text-capitalize text-danger">Oops!</span>
            <span class="thanks-subtitle font-weight-bold text-capitalize">Your Session is expired</span>
            <span class="thanks-msg">You will redirecting <span id="count"></span> Seconds in to our Home Page</span>
            <a href="index.php" class="btn btn-light rounded-0 thanks-btn text-capitalize">&larr; Go back to Home</a>
          </div>
          <script>
            // var count = 5; var countdown = setInterval(function(){
            //   $("#count").text(count);
            //   if (count == 0){ clearInterval(countdown); window.open('index.php', "_self");}
            //   count--;
            // }, 1000);
            var test = window.location.href.split('#')[0];
            console.log(test);
          </script>
          <?php } if(!isset($_GET['share'])){ ?>
          <div class="d-flex flex-fill bg-white thanks-block text-center flex-column justify-content-center align-items-center">
            <img src="assets/img/comman/thanks-icon.svg" class="thanks-icon">
            <span class="thanks-title font-weight-bold text-capitalize">You're all set!</span>
            <span class="thanks-subtitle font-weight-bold text-capitalize">Greetings From Shapoorji Vicinia</span>
            <span class="thanks-msg">Thanks you for expressing interest on our website. <span class="d-md-block">Our expert will get in touch with you shortly.</span></span>
            <a href="index.php" class="btn btn-light rounded-0 thanks-btn text-capitalize">&larr; Go back to Home</a>
          </div>
          <?php } if($thanksStutus == "brochure" OR $thanksStutus == "virtual" OR $thanksStutus == "floorplan"){ ?>
          <div class="d-flex flex-fill bg-light info-block flex-column justify-content-center">

          <!-- Download Brochure =================== -->
          <?php if($thanksStutus == "brochure"){ ?>
          <span class="d-block thanks-subtitle font-weight-bold text-capitalize text-center mb-md-3 mb-2"><span class="mi mi-download nav-icon"></span> <span class="d-none d-md-inline">Shapoorji Vicinia</span> Brochure</span>
          <div class="text-center">
            <img src="assets/img/comman/thanks-brochure.svg" class="thanks-brochure-icon mt-2 mt-md-4">
            <span class="d-block thanks-subtitle font-weight-bold text-capitalize">Please Wait</span>
            <span class="thanks-msg text-capitalize">Redirecting to brochure in <span id="bro-count"></span> Seconds</span>
          </div>
          <script>var count = 3; var countdown = setInterval(function(){
              $("#bro-count").text(count);
              if (count == 0){ clearInterval(countdown); window.open('brochure.pdf', "_self");}
              count--;
            }, 1000);
          </script>
          <?php } ?>
          <!-- Download Brochure End =================== -->

          <!-- Virtual Tour =================== -->
          <?php if($thanksStutus == "virtual"){ ?>
          <span class="d-block thanks-subtitle font-weight-bold text-capitalize mb-md-3 mb-2"><span class="mi mi-sitevisit nav-icon"></span> <span class="d-none d-md-inline">Shapoorji Vicinia</span> Virtual Tour</span>
          
          <iframe frameborder="0"
              class="lazyload thanks-video"
              allowfullscreen=""
              sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation"
              data-src="//www.youtube.com/embed/ZfV-aYdU4uE"></iframe>

          <?php } ?>
          <!-- Virtual Tour End =================== -->

          <!-- Unit Plan =================== -->
          <?php if($thanksStutus == "floorplan"){ ?>
          <span class="d-block thanks-subtitle font-weight-bold text-capitalize mb-md-3 mb-2"><span class="mi mi-siteplan nav-icon"></span> <span class="d-none d-md-inline">Shapoorji Vicinia</span> Unit Plan's</span>

          <div class="row owl-carousel owl-theme thanks-floor-plan lazyload"
                data-script="<?= loadURL('', './assets/plugins/fancybox/jquery.fancybox.min.js'); ?>"
                data-link="<?= loadURL('', './assets/plugins/fancybox/jquery.fancybox.min.css'); ?>">

            <div class="item col">
              <a data-fancybox="floorplan" thanks-lightbox href="assets/img/2bhk-768w.jpg" data-srcset="<?php loadImgLgURL("2bhk.jpg"); ?>">
                <div class="at-property-item shadow-sm border border-grey mt-1">
                    <div class="at-property-img">
                        <?php loadImgSm([ "src" => "2bhk.jpg", "class" => "floor-plan-img", "style" => ""]); ?>
                        <div class="at-property-overlayer"></div>
                        <span class="btn btn-default at-property-btn" role="button">View Plan</span>
                    </div>
                    <div class="at-property-dis bg-info text-white">
                        <h5>2 BHK</h5>
                    </div>
                </div>
              </a>
            </div>
            <div class="item col">
              <a data-fancybox="floorplan" thanks-lightbox href="assets/img/3bhk-768w.jpg" data-srcset="<?php loadImgLgURL("3bhk.jpg"); ?>">
                <div class="at-property-item shadow-sm border border-grey mt-1">
                    <div class="at-property-img">
                        <?php loadImgSm([ "src" => "3bhk.jpg", "class" => "floor-plan-img", "style" => ""]); ?>
                        <div class="at-property-overlayer"></div>
                        <span class="btn btn-default at-property-btn" role="button">View Plan</span>
                    </div>
                    <div class="at-property-dis bg-info text-white">
                        <h5>2 BHK</h5>
                    </div>
                </div>
              </a>
            </div>
            <div class="item col">
              <a data-fancybox="floorplan" thanks-lightbox href="assets/img/3.5bhk-768w.jpg" data-srcset="<?php loadImgLgURL("3.5bhk.jpg"); ?>">
                <div class="at-property-item shadow-sm border border-grey mt-1">
                    <div class="at-property-img">
                        <?php loadImgSm([ "src" => "3.5bhk.jpg", "class" => "floor-plan-img", "style" => ""]); ?>
                        <div class="at-property-overlayer"></div>
                        <span class="btn btn-default at-property-btn" role="button">View Plan</span>
                    </div>
                    <div class="at-property-dis bg-info text-white">
                        <h5>2 BHK</h5>
                    </div>
                </div>
              </a>
            </div>
            <div class="item col">
              <a data-fancybox="floorplan" thanks-lightbox href="assets/img/3.5bhk-768w.jpg" data-srcset="<?php loadImgLgURL("3.5bhk.jpg"); ?>">
                <div class="at-property-item shadow-sm border border-grey mt-1">
                    <div class="at-property-img">
                        <?php loadImgSm([ "src" => "3.5bhk.jpg", "class" => "floor-plan-img", "style" => ""]); ?>
                        <div class="at-property-overlayer"></div>
                        <span class="btn btn-default at-property-btn" role="button">View Plan</span>
                    </div>
                    <div class="at-property-dis bg-info text-white">
                        <h5>2 BHK</h5>
                    </div>
                </div>
              </a>
            </div>
          </div>
          <?php } ?>
          <!-- Unit Plan End =================== -->
        
        </div>
        <?php } ?>
      </div>

      <ul class="mob-action nav nav-fill d-sm-block d-md-none d-lg-none">
        <li class="nav-item" onclick="javascript:location.href='tel:+919167757310'"><span class="mi mi-call action-icon"></span> Call</li>
        <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=919167757370&text=test wahtasapp msg', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> WhatsApp</li>
      </ul>
    </main>
    <footer class="disclaimer">
       <b>Disclaimer :</b> The content is for information purposes only and does not constitute an offer to avail of any service. Prices mentioned are subject to change without notice and properties mentioned are subject to availability. Images for representation purposes only. This is the official website of authorized marketing partner (PropertyPistol Real Estate Brokers L.L.C.). We may send updates to the mobile number/email id registered with us. All Rights Reserved.
    </footer>


    <!-- Required JS -->
    <?php loadJS("https://code.jquery.com/jquery-3.4.1.slim.min.js", "./assets/js/jquery.js"); ?>
    <!-- Plugins -->
    <?php loadJS("https://cdn.jsdelivr.net/npm/lazysizes@5.2.0/plugins/unveilhooks/ls.unveilhooks.min.js", "./assets/plugins/lazysizes/plugins/unveilhooks/ls.unveilhooks.min.js"); ?>
    <?php loadJS("https://cdn.jsdelivr.net/npm/lazysizes@5.2.0/lazysizes.min.js", "./assets/plugins/lazysizes/lazysizes.min.js"); ?>
    <?php loadJS("https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js", "./assets/plugins/OwlCarousel/owl.carousel.js"); ?>
    <?php loadJS("", "./assets/js/thanks.js"); ?>
    
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event) { 
        // Loader ========================================================================================================
        document.getElementById("loader").remove();
        // $("#loader").addClass("animated fadeOut");
        // Required JS ===================================================================================================
        <?php lazyLoadJS("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", "./assets/js/bootstrap.js"); ?>
        // Fonts =========================================================================================================
        $('head').append($('<link rel="stylesheet" type="text/css" crossorigin="anonymous" />').attr('href','<?= loadURL('https://fonts.googleapis.com/css?family=Muli|Roboto&display=swap', './assets/fonts/font.css'); ?>'));
        $('head').append($('<link rel="stylesheet" type="text/css" crossorigin="anonymous" />').attr('href','./assets/fonts/icons.css'));
      });
    </script>

    
</body>

</html>