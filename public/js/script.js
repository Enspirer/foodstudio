$(document).ready(function () {
  $(window).scroll(function () {
    var sc = $(window).scrollTop();
    if (sc > 100) {
      $(".bottomnav").addClass("sticky");
      $(".navLogoRound").removeClass("navLogoRound-d-none");
    } else {
      $(".bottomnav").removeClass("sticky");
       $(".navLogoRound").addClass("navLogoRound-d-none");
    }
  });
});


function SectionResize(){
    if ($(window).width() > 768) {
        $('.window-height').css({"height": ($(window).height() - 190) });

    } else {
        $('.window-height').css({"height": (($(window).height() - 100) / 2) });
    }
}

AOS.init({
    easing: 'ease-in-out-sine'
});

$(document).ready(function() {
    SectionResize();


    $(".loading").delay(2500).fadeOut(500, function() {
        $("body").css({
            'overflow-y': "auto"
        });
        $('html, body').animate({scrollTop:0},300);
    })

    // Fakes the loading setting a timeout
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 1000);

    // Add smooth scrolling to all links
    $("#button").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });

    $(".main-menu-toggle").on('click', function () {
        // $(".main-nav-overlay").toggleClass("show");
        $(".navbar-collapse .display").toggleClass("show");
        // $( ".navbar-collapse" ).toggle( "slow", function() {
        // });
    })

    $(".main-nav-overlay").on('click', function () {
        $(".navbar-collapse").removeClass("in");
        $(".main-menu-toggle").addClass("collapsed");
        $(".main-nav-overlay").removeClass("show");
        $(".main-menu-toggle").css({'display' : 'none'});
    })

    // if ($(".stop-circle").waypoint(function(e) {
    //     $(this.element).toggleClass("active")
    // };
    $('#management-slider').carousel({
        interval: 2500,
        pause : ""
        });



    $(window).scroll(function() {
        // alert($(window).height() - 400);

        if (($(".stop-circle.c-1").offset().top - $(window).scrollTop()) < ($(".left-line-height").height() + 71)) {
            $(".stop-circle.c-1").addClass("active");
        } else {
            $(".stop-circle.c-1").removeClass("active");
        }

        // if (($(".stop-circle.c-2").offset().top - $(window).scrollTop()) < ($(".left-line-height").height() + 71)) {
        //     $(".stop-circle.c-2").addClass("active");
        // } else {
        //     $(".stop-circle.c-2").removeClass("active");
        // }

        if (($(".stop-circle.c-3").offset().top - $(window).scrollTop()) < ($(".left-line-height").height() + 71)) {
            $(".stop-circle.c-3").addClass("active");
        } else {
            $(".stop-circle.c-3").removeClass("active");
        }

        if (($(".stop-circle.c-4").offset().top - $(window).scrollTop()) < ($(".left-line-height").height() + 71)) {
            $(".stop-circle.c-4").addClass("active");
        } else {
            $(".stop-circle.c-4").removeClass("active");
        }

        if (($(".stop-circle.c-5").offset().top - $(window).scrollTop()) < ($(".left-line-height").height() + 71)) {
            $(".stop-circle.c-5").addClass("active");
        } else {
            $(".stop-circle.c-5").removeClass("active");
        }
    });

    $('#button').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    $('#btn-search-form').click(function(e){
        e.preventDefault();
        $(".search-container").toggle();
    });
    
    



});


// Youtube 
$(function(){
  var youtubeUrl = "https://www.youtube.com/embed/" + $('#youtubevideotabs li:first-child').attr('youtubeid') + "?rel=0";
  $('#youtubeplayer iframe').attr('src',youtubeUrl);
  
  $('#youtubevideotabs li').click(function(){
    youtubeUrl = "https://www.youtube.com/embed/"+ $(this).attr('youtubeid') +"?rel=0";
    $('#youtubeplayer iframe').attr('src',youtubeUrl);    
  });  

//   $( document ).ready(function() {
//     alert('aletr');
//     });
  
//   $("#youtubevideotabs").mCustomScrollbar({
//     scrollButtons:{
//       enable:true
//     },
// 		theme:"dark"
//   });
});

$( document ).ready(function() {

    var youtubeUrl = "https://www.youtube.com/embed/" + $('#youtubevideotabs li:first-child').attr('youtubeid') + "?rel=0";
    $('#youtubeplayer iframe').attr('src',youtubeUrl);

    youtubeUrl = "https://www.youtube.com/embed/"+ $('#ytb').attr('youtubeid') +"?rel=0";
    $('#youtubeplayer iframe').attr('src',youtubeUrl);  

    // alert('alert');
    });

