<?php require "functions.php"; $amiStyle = 1; $galStyle = 2; $developmentMode = 1; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php 
      function styleInitCSS(){
        echo '<style type="text/css">
            :root {
              --colorPrimary: #58B3EA;
              --colorSecondary: #0D4CA8;
              --colorBtn: #ffffff;
            }
          </style>';
      } 
      styleInitCSS();
    ?>
    <title>New Template 2.0</title>
    <?php 
      loadCSS("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css", "./assets/css/bootstrap.css");
      if($developmentMode == 1){ require "minify.php"; IndexPageMinify(); }
      if($amiStyle == 2 || $amiStyle == 3 || $galStyle == 2 || $galStyle == 3){ 
        lazyLoadCSS("https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css", "./assets/plugins/OwlCarousel/owl.carousel.css");
        lazyLoadCSS("https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css", "./assets/plugins/OwlCarousel/owl.theme.default.css"); 
      }
    ?>
    <link rel="stylesheet" href="./assets/css/style.min.css?<?= filemtime('./assets/css/style.min.css'); ?>" />
    <!-- Conversion Codes -->
</head>

<body data-spy="scroll" data-target="#navbarNav">
    
    <div id="loader"><span class="loader-text"><img src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/http://godrejs-nirvaan.com/wp-content/uploads/2020/02/logo-n-1.png" class="loader-logo"></span></div>

    <header class="micro-nav fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white micro-navbar">
          <a class="navbar-brand" href="#" onclick="return false"><img src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/http://godrejs-nirvaan.com/wp-content/uploads/2020/02/logo-n-1.png" class="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-fill">
              <li class="nav-item"><a class="nav-link" href="#home"><i class="mi mi-home nav-icon"></i><span class="d-sm-inline d-md-none"> Home</span></a></li>
              <li class="nav-item"><a class="nav-link" href="#pricing"><i class="mi mi-price nav-icon"></i> Price</a></li>
              <li class="nav-item"><a class="nav-link" href="#sitefloorplan"><i class="mi mi-siteplan nav-icon"></i> Site &amp; Floor Plan</a></li>
              <li class="nav-item"><a class="nav-link" href="#amenities"><i class="mi mi-ami nav-icon"></i> Amenities</a></li>
              <li class="nav-item"><a class="nav-link" href="#gallery"><i class="mi mi-gallery nav-icon"></i> Gallery</a></li>
              <li class="nav-item"><a class="nav-link" href="#location"><i class="mi mi-location nav-icon"></i> Location</a></li>
              <li class="nav-item"><a class="nav-link" href="#sitevisit"><i class="mi mi-sitevisit nav-icon"></i> Virtual Site Tour</a></li>
              <li class="nav-item overflow-hidden"><a class="nav-link enqModal" href="#" data-form="md" data-title="Dowbnload brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure.pdf" data-toggle="modal" data-target="#enqModal"><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Brochure</a></li>
            </ul>
          </div>
        </nav>
    </header>
    <main>
      <div id="home" class="carousel slide micro-main-slider" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#home" data-slide-to="0" class="active"></li>
          <li data-target="#home" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active"><?php loadImgLg([ "src" => "testimg.jpg", "class" => "d-block micro-main-slider-img", "style" => ""]); ?></div>
          <div class="carousel-item"><?php loadImgLg([ "src" => "testimg2.jpg", "class" => "d-block micro-main-slider-img", "style" => ""]); ?></div>
        </div>
      </div>
      <div class="info-box">
        <span class="pro-status">Booking Open</span>
        <span class="pro-title">Shapoorji Vicinia</span>
        <span class="pro-add">Chandivali Powai, Mumbai</span>
        <span class="pro-dev">by Shapoorji Pallonji Real Estate</span>
        <ul class="pro-spec">
          <li><span class="list-icon">&rtrif;</span> <span class="heading">Plot Area</span> : 6.73 Acres</li>
          <li><span class="list-icon">&rtrif;</span> <span class="heading">No Of Towers</span> : 8</li>
          <li><span class="list-icon">&rtrif;</span> <span class="heading">Possession</span> : June 2020</li>
        </ul>
        <span class="pro-tag-line">Premium 2, 3 & 3.5 Bed Residences starting price</span>
        <span class="pro-price"><i class="mi mi-rs-light info-icon"></i>1.75 Cr* <small>Onwards</small></span>
        <button class="btn btn-info micro-form-btn enqModal effetMoveGradient effectScale" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">Enquire Now</button>
        <span class="pro-rera"><span class="heading">RERA NO</span> : P51800002564</span>
      </div>
      <div class="mob-form d-sm-block d-md-none d-lg-none">
        <span class="d-block form-heading font-weight-bold">Pre-Register here for Best Offers</span>
        <form action="" method="POST" class="form-side">
          <div class="form-group">
            <input type="text" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" required placeholder="Name">
          </div>
          <div class="form-group">
            <input type="hidden" name="fullMobileNo" value="">
            <input type="tel" id="intTelInput-mob" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field" required placeholder="Mobile No">
          </div>
          <div class="form-group">
            <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control rounded-0 micro-form-field" required placeholder="E-Mail Address">
          </div>
          <button type="submit" class="btn btn-info micro-form-btn effetMoveGradient" onclick="setCookie('redirectCookie', 'enquire');">Pre-Register Now</button>
        </form>
      </div>
      <?php require "layout.php"; ?>
      <div class="micro-side text-center">
        <div class="og-section pb-2">
          <ul class="nav nav-fill og-block">
            <li class="nav-item enqModal" data-form="lg" data-title="Organize Site Visit" data-btn="Request Site Visit" data-enquiry="Organize Site Visit" data-toggle="modal" data-target="#enqModal">Organize Site Visit</li>
            <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=919167757370&text=test wahtasapp msg', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> 919166757310</li>
          </ul>
          <p class="og-heading my-1 text-secondary">Or Request A</p>
          <button class="btn btn-sm btn-info micro-form-btn-sm effetGradient effectScale enqModal" data-form="sm" data-title="Immediate Call Back" data-btn="Request Call Now" data-enquiry="Immediate Call Back" data-toggle="modal" data-target="#enqModal"><span class="mi mi-call action-icon"></span> Call Back Now</button>
        </div>

        <span class="d-block form-heading font-weight-bold my-2">Pre-Register here for Best Offers</span>
        <form action="" method="POST" class="form-side">
          <div class="form-group">
            <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" placeholder="Name" required />
          </div>
          <div class="form-group">
            <input type="hidden" name="fullMobileNo" value="">
            <input type="tel" id="intTelInput-side" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field w-100" placeholder="Mobile No" required />
          </div>
          <div class="form-group">
            <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control rounded-0 micro-form-field" placeholder="E-Mail Address" required />
          </div>
          <button type="submit" name="formBtn" class="btn btn-info micro-form-btn mt-2 effetMoveGradient" onclick="setCookie('redirectCookie', 'enquire');">Pre-Register Now</button>
        </form>
      </div>
      <ul class="mob-action nav nav-fill d-sm-block d-lg-none">
        <li class="nav-item" onclick="javascript:location.href='tel:+919167757310'"><span class="mi mi-call action-icon"></span> Call</li>
        <li class="nav-item enqModal" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal"><span class="mi mi-enquire action-icon"></span> Enquire</li>
        <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=919167757370&text=test wahtasapp msg', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> WhatsApp</li>
      </ul>
    </main>
    <footer class="disclaimer">
       <b>Disclaimer :</b> The content is for information purposes only and does not constitute an offer to avail of any service. Prices mentioned are subject to change without notice and properties mentioned are subject to availability. Images for representation purposes only. This is the official website of authorized marketing partner (PropertyPistol Real Estate Brokers L.L.C.). We may send updates to the mobile number/email id registered with us. All Rights Reserved.
    </footer>


    <!-- Modal -->
    <?php require "modal.php"; ?>

    <!-- Required JS -->
    <?php loadJS("https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js", "./assets/js/jquery.js"); ?>
    <!-- Plugins -->
    <?php loadJS("https://cdn.jsdelivr.net/npm/lazysizes@5.2.0/plugins/object-fit/ls.object-fit.min.js", "./assets/plugins/lazysizes/plugins/object-fit/ls.object-fit.min.js"); ?>
    <?php loadJS("https://cdn.jsdelivr.net/npm/lazysizes@5.2.0/plugins/parent-fit/ls.parent-fit.min.js", "./assets/plugins/lazysizes/plugins/parent-fit/ls.parent-fit.min.js"); ?>
    <?php loadJS("https://cdn.jsdelivr.net/npm/lazysizes@5.2.0/plugins/blur-up/ls.blur-up.min.js", "./assets/plugins/lazysizes/plugins/blur-up/ls.blur-up.min.js"); ?>
    <?php loadJS("https://cdn.jsdelivr.net/npm/lazysizes@5.2.0/plugins/unveilhooks/ls.unveilhooks.min.js", "./assets/plugins/lazysizes/plugins/unveilhooks/ls.unveilhooks.min.js"); ?>
    <?php loadJS("https://cdn.jsdelivr.net/npm/lazysizes@5.2.0/lazysizes.min.js", "./assets/plugins/lazysizes/lazysizes.min.js"); ?>
    <?php loadJS("https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js", "./assets/plugins/OwlCarousel/owl.carousel.js"); ?>
    <?php loadJS("https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.0/build/js/intlTelInput-jquery.min.js", "./assets/plugins/intTelInput/intlTelInput-jquery.min.js"); ?>

    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event) { 
        // Required JS ===================================================================================================
        <?php lazyLoadJS("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js", "./assets/js/bootstrap.js"); ?>
        // Fonts =========================================================================================================
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href','<?= loadURL('https://fonts.googleapis.com/css?family=Muli|Roboto&display=swap', './assets/fonts/font.css'); ?>'));
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href','<?= loadURL('https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.0/build/css/intlTelInput.min.css', './assets/plugins/intTelInput/intlTelInput.min.css'); ?>'));
      });
    </script>
    <script type="text/javascript" src="./assets/js/app.min.js?<?= filemtime('./assets/js/app.min.js'); ?>"></script>

    <?php if($developmentMode == 1) { require "./assets/plugins/dev/development.html"; } ?>
</body>

</html>