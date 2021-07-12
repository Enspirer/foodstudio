<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Studio</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="icon" type="image/png" href="{{url('img/logo-fs.png')}}" sizes="32x32"/>

    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '281583542716961');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=281583542716961&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VQHDJLTY9Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VQHDJLTY9Y');
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('css/aos.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
    <!-- <script src="https://kit.fontawesome.com/274adbce03.js"></script> -->
</head>
<body>

@include('frontend.includes.nav')


@yield('content')


<footer>

    <div class="container-fuild">
        <div class="row footer-container m-0">
            <div class="logo-img-div">
                <img src="{{url('img/logo-fs.png')}}">
            </div>
            <div class="socail-media-panel">
                <a href="https://www.facebook.com/FoodStudioSL" target="_blank"><span> <i class="fa fa-facebook-f"></i> </span></a>
                <a href="https://www.youtube.com/channel/UCEnRw1p2P0Qjx_DjxYkY9kw" target="_blank"> <span> <i class="fa fa-youtube"></i> </span></a>
                <a href="https://www.instagram.com/foodstudiosl/" target="_blank">  <span> <i class="fa fa-instagram"></i> </span></a>
            </div>
            <div class="footer-navigation">
              <ul class="nav navbar-nav navbar-center">

              <li class="{{ Request::segment(1)==null ? 'active' :null }}">
                                <a href="{{url('/')}}">
                                        Home              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='about-us' ? 'active' :null }}">
                                    <a href="{{url('about-us')}}">
                                        About Us              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='tenant-and-cuisines' ? 'active' :null }}">
                                    <a href="{{url('tenant-and-cuisines/1')}}">
                                        Tenants &amp; Cuisines              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='whats-on' ? 'active' :null }}">
                                    <a href="{{url('whats-on')}}">
                                        What's On              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='event-spaces' ? 'active' :null }}">
                                    <a href="{{url('event-spaces')}}">
                                        Event Spaces              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='media' ? 'active' :null || 
                                Request::segment(1)=='media-tenant' ? 'active' :null || Request::segment(1)=='media-video' ? 'active' :null ||
                                Request::segment(1)=='media-social' ? 'active' :null }}">
                                    <a href="{{url('media')}}">
                                        Media              </a>
                                </li>
                                
                                <li class="{{ Request::segment(1)=='fs-store' ? 'active' :null }}">
                                    <a href="{{url('fs-store')}}">
                                        FS Store              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='careers' ? 'active' :null }}">
                                    <a href="{{url('careers')}}">
                                        Careers              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='contact-us' ? 'active' :null }}">
                                    <a href="{{url('contact-us')}}">
                                        Contact Us              </a>
                                </li>
              </ul>
            </div>
        </div>
    </div>

    <div class="rights">
        <div class="container-fuild">
            <div class="row m-0">
                <div class="col-sm-6 text-left">
                    <p>&copy; 2021 All Rights Reserved.</p>
                </div>
                <div class="col-sm-6 text-right">
                    <p>Web Design &amp; Development by <a href="https://www.enspirer.com" target="_blank"><b>Enspirer</b></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="button"></a>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{url('fd/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('fd/aos.js')}}"></script>
<script type="text/javascript" src="{{url('fd/script.js')}}"></script>
<!--<script type="text/javascript" src="https://www.foodstudio.lk/js/jquery.easing.min.js"></script>-->
<!--<script type="text/javascript" src="https://www.foodstudio.lk/js/jslide.js"></script>-->

<script type="text/javascript" src="{{url('fd/owl.carousel.min.js')}}"></script>
<!-- <script type="text/javascript" src="js/owl.carousel.min.js"></script> -->

<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 35,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
</script>


<script type="text/javascript">
    $('#homeCarousel').carousel({
      interval: 2000
    });
</script>
<script type="text/javascript">

        $('#slides-a').jslide({
            mode: 'fade'
        });

</script>

<script>
        var duration = 20; // duration in seconds
var fadeAmount = 0.3; // fade duration amount relative to the time the image is visible

$(document).ready(function (){
  var images = $("#slideshow img");
  var numImages = images.size();
  var durationMs = duration * 1000;
  var imageTime = durationMs / numImages; // time the image is visible 
  var fadeTime = imageTime * fadeAmount; // time for cross fading
  var visibleTime = imageTime  - (imageTime * fadeAmount * 2);// time the image is visible with opacity == 1
  var animDelay = visibleTime * (numImages - 1) + fadeTime * (numImages - 2); // animation delay/offset for a single image 
  
  images.each( function( index, element ){
    if(index != 0){
      $(element).css("opacity","0");
      setTimeout(function(){
        doAnimationLoop(element,fadeTime, visibleTime, fadeTime, animDelay);
      },visibleTime*index + fadeTime*(index-1));
    }else{
      setTimeout(function(){
        $(element).animate({opacity:0},fadeTime, function(){
          setTimeout(function(){
            doAnimationLoop(element,fadeTime, visibleTime, fadeTime, animDelay);
          },animDelay )
        });
      },visibleTime);
    }
  });
});

// creates a animation loop
function doAnimationLoop(element, fadeInTime, visibleTime, fadeOutTime, pauseTime){
  fadeInOut(element,fadeInTime, visibleTime, fadeOutTime ,function(){
    setTimeout(function(){
      doAnimationLoop(element, fadeInTime, visibleTime, fadeOutTime, pauseTime);
    },pauseTime);
  });
}

// shorthand for in- and out-fading
function fadeInOut( element, fadeIn, visible, fadeOut, onComplete){
  return $(element).animate( {opacity:1}, fadeIn ).delay( visible ).animate( {opacity:0}, fadeOut, onComplete);
}
</script>      

<script type="text/javascript">
    $(window).on('load', function() {
        $('#exampleModalCenter').modal('show');
    });
    $("#close-btn").click(function () {
       $('#exampleModalCenter').modal('hide');
    });
</script>