// Navigation
$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

// Slider
$('.ami-2').owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: false,
    rewind: true,
    margin: 10,          
    responsiveClass: true,
    smartSpeed: 800,
    nav: true,
    dots: false,
    responsive:{
        0:{ items:1 },
        600:{ items:3 },
        1000:{ items:5 }
    }
});
$('.ami-3').owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: false,
  rewind: true,
  margin: 20,          
  responsiveClass: true,
  smartSpeed: 1000,
  nav: true,
  dots: false,
  responsive: {
    0: {items: 1, nav: false,},
    768: {items: 2,mouseDrag: false,}
  }
});
$('.gal-3').owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: false,
  rewind: true,
  margin: 20,          
  responsiveClass: true,
  smartSpeed: 1500,
  nav: true,
  dots: false,
  items: 1
});
$('.loc-con').owlCarousel({
  autoplay: true,
    lazyLoad: true,
    loop: false,
    rewind: true,
    margin: 0,          
    responsiveClass: true,
    smartSpeed: 800,
    nav: true,
    dots: false,
    responsive:{
        0:{ items:1 },
        600:{ items:2 },
        1000:{ items:4 }
    }
});