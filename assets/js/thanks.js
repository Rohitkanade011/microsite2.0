
// Sliders
$('.thanks-floor-plan').owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: false,
    rewind: true,
    margin: 0,          
    responsiveClass: false,
    smartSpeed: 800,
    nav: true,
    dots: false,
    responsive:{
        0:{ items:1 },
        600:{ items:2 },
        1000:{ items:3 }
    }
});