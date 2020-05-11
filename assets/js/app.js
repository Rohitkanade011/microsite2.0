
document.addEventListener("DOMContentLoaded", function(event) { 
  // Loader ========================================================================================================
  document.getElementById("loader").remove();
  // Auto Enquiry Modal
  setTimeout(function(){
       $('#enqModal').modal('show');
   }, 3000);
});

// Navigation
$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

// Enquiry Modal
$('.enqModal').click(function() {        
  var Type  = $(this).data("form");
  var Title = $(this).data("title");
  var Btn   = $(this).data("btn");
  if($(this).data("redirect")){ var RedirectCookie = $(this).data("redirect"); }else{ var RedirectCookie = "enquire"; }
  var Enquiry  = $(this).data("enquiry");
  $('#enqModal .modal-title').text(Title);
  $('#enqModal .micro-form-btn').text(Btn);
  $('#enqModal #enquireName').val(Enquiry);
  if(Type == "sm" || Type == "md" || Type == "lg"){
    $('#enqModal .modal-head').removeClass('d-none');
    $('#enqModal .modal-logo, #enqModal .form-md, #enqModal .form-lg, #enqModal .modal-call-btn').addClass('d-none');
  }
  if(Type == "md"){ 
    $('#enqModal .modal-head, #enqModal .form-md').removeClass('d-none');
    $('#enqModal .form-lg').addClass('d-none');
  }
  if(Type == "lg"){ 
    $('#enqModal .modal-head, #enqModal .form-md, #enqModal .form-lg').removeClass('d-none');
  }
  if(RedirectCookie) setCookie('redirectCookie', RedirectCookie);
});

// User Inactivity Enquiry Modal
var interval;
$(document).on('mousemove keyup keypress',function(){
  clearTimeout(interval);
  settimeout();
});
function settimeout(){
  interval=setTimeout(function(){
    $('#enqModal').modal('show');
  },30000)
}

// Cookies
function setCookie(cname, cvalue) {
  var d = new Date();
  d.setTime(d.getTime() + (1*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

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