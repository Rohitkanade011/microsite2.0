<?php 

require_once "./assets/plugins/phpwee/minify-master/src/Minify.php"; 
require_once "./assets/plugins/phpwee/minify-master/src/CSS.php"; 
require_once "./assets/plugins/phpwee/minify-master/src/JS.php"; 
require_once "./assets/plugins/phpwee/minify-master/src/ConverterInterface.php"; 
require_once "./assets/plugins/phpwee/minify-master/src/Converter.php";
use MatthiasMullie\Minify;

function IndexPageMinify(){
  $amiStyle = 2; $galStyle = 1;
  $minifier = new Minify\CSS("./assets/css/style.css");
  $minifier->add("./design/amenities/amenities-".$amiStyle.".css");
  $minifier->add("./design/gallery/gallery-".$galStyle.".css");
  $minifier->add("./assets/fonts/icons.css");
  if($amiStyle == 2 || $amiStyle == 3 || $galStyle == 2 || $galStyle == 3){ $minifier->add("./assets/plugins/OwlCarousel/app.css"); }
  $minifier->add("app.css");
  $minifiedPath = './assets/css/style.min.css';
  $minifier->minify($minifiedPath);

  $minifierJS = new Minify\JS("./assets/js/app.js");
  $minifiedJSPath = './assets/js/app.min.js';
  $minifierJS->minify($minifiedJSPath);
}

function ThanksPageMinify(){
  $minifier = new Minify\CSS("./assets/css/thanks.css");
  $minifier->add("./assets/plugins/OwlCarousel/app.css");
  $minifier->add("./design/amenities/amenities-1.css");
  $minifier->add("./assets/fonts/icons.css");
  $minifier->add("app.css");
  $minifiedPath = './assets/css/thanks.min.css';
  $minifier->minify($minifiedPath);

  $minifierJS = new Minify\JS("./assets/js/thanks.js");
  $minifiedJSPath = './assets/js/thanks.min.js';
  $minifierJS->minify($minifiedJSPath);
}


?>