<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Gestor de solicitudes</title>
<link rel="website icon" type="png" href="{{asset('images/EscudoM.png') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}"/>



<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <img src="{{asset('images/logo.png') }}" alt="logowww" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">Nosotros</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Servicios</a> </li>
        <li class="nav-item"> <a class="nav-link" href="{{asset('/ingresarusu/register') }}" data-scroll-nav="3">Ingresar</a> </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Banner Image -->

<div class="banner text-center" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <h1 class="text-capitalize">Consultorio Tecnologico unimeta</h1>
      <div style="text-align:center">
        <img src="{{asset('images/logo2.png') }}" alt="logowww" class="logo-1">
      </div>
      
      <a href="{{asset('/ingresarusu/register') }}" class="banner-btn">Ingresar</a> </div>
  </div>
</div>

<!-- End Banner Image --> 



<!-- Services -->
<div class="services section-padding bg-grey" data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title text-center">
        <h3>Cuales son Nuestros Servicios</h3>
        <p>Gestionar los procesos de solicitudes de mesa de ayuda a los Directivos y administrativos de la UNIMETA.</p>
        <span class="section-title-line"></span> </div>
      
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
        <div class="service-box bg-white text-center">
          <div class="icon"> <i class="fa-sharp fa-solid fa-house"></i> </div>
          <div class="icon-text">
            <h4 class="title-box">Consultoria y asesoria</h4>
            <p>-Adquisicion e implementacion de equipos(hardware).</p>
            <p>-Adquisicion e implementacion de software.</p>
            <p>-Servicios web y/o digitales</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
        <div class="service-box bg-white text-center">
          <div class="icon"> <i class="fa-solid fa-buildings"></i> </div>
          <div class="icon-text">
            <h4 class="title-box">Quick Anouncement</h4>
            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
          </div>
        </div>
      </div>
      
      
      
    </div>
  </div>
</div>

<!-- End Services --> 

<!-- Condiciones -->
<div class="services section-padding bg-grey" data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title text-center">
        <h3>Cuales son Nuestras Condiciones</h3>
        <p>Gestionar los procesos de solicitudes de mesa de ayuda a los Directivos y administrativos de la UNIMETA.</p>
        <span class="section-title-line"></span> </div>
      
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
        <div class="service-box bg-white text-center">
          <div class="icon"> <i class="fas fa-chart-line"></i> </div>
          <div class="icon-text">
            <h4 class="title-box">Consultoria y asesoria</h4>
            <p>-Adquisicion e implementacion de equipos(hardware).</p>
            <p>-Adquisicion e implementacion de software.</p>
            <p>-Servicios web y/o digitales</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
        <div class="service-box bg-white text-center">
          <div class="icon"> <i class="fas fa-bullhorn "></i> </div>
          <div class="icon-text">
            <h4 class="title-box">Capacitaciones</h4>
            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
        <div class="service-box bg-white text-center">
          <div class="icon"> <i class="fas fa-map-marked"></i> </div>
          <div class="icon-text">
            <h4 class="title-box">Mark Location</h4>
            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End condiciones --> 
<!-- instrumentos -->
<div class="services section-padding bg-grey" data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title text-center">
        <h3>Cuales son Nuestros Servicios</h3>
        <p>Gestionar los procesos de solicitudes de mesa de ayuda a los Directivos y administrativos de la UNIMETA.</p>
        <span class="section-title-line"></span> </div>
      
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
        <div class="service-box bg-white text-center">
          <div class="icon"> <i class="fas fa-chart-line"></i> </div>
          <div class="icon-text">
            <h4 class="title-box">Chart Line</h4>
            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
        <div class="service-box bg-white text-center">
          <div class="icon"> <i class="fas fa-bullhorn "></i> </div>
          <div class="icon-text">
            <h4 class="title-box">Quick Anouncement</h4>
            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
          </div>
        </div>
      </div>
      

    </div>
  </div>
</div>

<!-- End Instrumentos --> 





<footer class="footer-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p>2023 &copy; Gestor de solicitudes. Sitio web diseñado por <a href="https://www.unimeta.edu.co/" target="_blank" rel="dofollow">Consultorio Tecnologico Unimeta</a></p>
      </div>
    </div>
  </div>
</footer>

<script src="https://kit.fontawesome.com/e1191e1407.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<!-- owl carousel js --> 
<script src="js/owl.carousel.min.js"></script> 
<!-- magnific-popup --> 
<script src="js/jquery.fancybox.min.js"></script> 

<!-- scrollIt js --> 
<script src="js/scrollIt.min.js"></script> 

<!-- isotope.pkgd.min js --> 
<script src="js/isotope.pkgd.min.js"></script> 
<script>
  $(window).on("scroll",function () {

      var bodyScroll = $(window).scrollTop(),
          navbar = $(".navbar");

      if(bodyScroll > 130){

          navbar.addClass("nav-scroll");
          $('.navbar-logo img').attr('src','images/EscudoM.png');


      }else{

          navbar.removeClass("nav-scroll");
          $('.navbar-logo img').attr('src','images/logo.png');

      }

  });

  $(window).on("load",function (){



var bodyScroll = $(window).scrollTop(),
navbar = $(".navbar");

if(bodyScroll > 130){

navbar.addClass("nav-scroll");
$('.navbar-logo img').attr('src','images/EscudoM.png');


}else{

navbar.removeClass("nav-scroll");
$('.navbar-logo img').attr('src','images/logo.png');

}

/* smooth scroll
  -------------------------------------------------------*/
  $.scrollIt({

easing: 'swing',      // the easing function for animation
scrollTime: 900,       // how long (in ms) the animation takes
activeClass: 'active', // class given to the active nav element
onPageChange: null,    // function(pageIndex) that is called when page is changed
topOffset: -63
});

/* isotope
-------------------------------------------------------*/
var $gallery = $('.gallery').isotope({});
$('.gallery').isotope({

    // options
    itemSelector: '.item-img',
    transitionDuration: '0.5s',

});


$(".gallery .single-image").fancybox({
  'transitionIn'  : 'elastic',
  'transitionOut' : 'elastic',
  'speedIn'   : 600,
  'speedOut'    : 200,
  'overlayShow' : false
});


/* filter items on button click
-------------------------------------------------------*/
$('.filtering').on( 'click', 'button', function() {

    var filterValue = $(this).attr('data-filter');

    $gallery.isotope({ filter: filterValue });

    });

$('.filtering').on( 'click', 'button', function() {

    $(this).addClass('active').siblings().removeClass('active');

});

})

$(function () {
$( ".cover-bg" ).each(function() {
    var attr = $(this).attr('data-image-src');

    if (typeof attr !== typeof undefined && attr !== false) {
      $(this).css('background-image', 'url('+attr+')');
    }

  });

  /* sections background color from data background
  -------------------------------------------------------*/
  $("[data-background-color]").each(function() {
      $(this).css("background-color", $(this).attr("data-background-color")  );
  });


/* Owl Caroursel testimonial
  -------------------------------------------------------*/
  
  $('.testimonials .owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    items:1,
    margin:30,
    dots: true,
    nav: false,
    
  });

});

</script>
</body>
</html>
