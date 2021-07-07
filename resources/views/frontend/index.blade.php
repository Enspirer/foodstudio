@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="landing-body home-main-baner ">
  <div class="row  landing-sec-container m-0">
    <div class="col-sm-6 p-0 window-height landing-sec landing-sec-1 ccc-box" style="height: 476px;">
      <a href="https://www.foodstudio.lk/tenant-and-cuisines#ccc">
        <img src="img/CCC.png">
        <div class="desc-container">
          <h1 class="text-center">Colombo <br> City Center</h1>
          <div class="scroll-next-indicator">
            <div class="indicator-container">
              <div class="indicator-arrow top">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </div>

              <div class="indicator-arrow bottom">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-sm-6 p-0 window-height landing-sec landing-sec-1 ogf-box" style="height: 476px;">
      <a href="https://www.foodstudio.lk/tenant-and-cuisines#ogf">
        <img src="img/OGC.png">
        <div class="desc-container">
          <h1 class="text-center">One <br> Galle Face</h1>
          <div class="scroll-next-indicator">
            <div class="indicator-container">
              <div class="indicator-arrow top">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </div>

              <div class="indicator-arrow bottom">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="scroll-next-indicator">
      <div class="indicator-container">
        <div class="indicator-arrow top">
          <a href="#about">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
        </div>

        <div class="indicator-arrow bottom">
          <a href="#about">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="clear-fix"></div>

<div class="container home-page-container mt-20 mb-20" id="about">
  <div class="row m-0 flex-align-items-center">
    <div class="col-sm-6">
      <div id="homeCarousel" class="carousel carousel-fade slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/1.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/2.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/3.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/4.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/5.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/6.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/7.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/8.jpg" alt="...">
          </div>
                  <div class="item active">
            <img src="https://www.foodstudio.lk/img/Slideshow/9.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/10.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/11.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/12.jpg" alt="...">
          </div>
                  <div class="item">
            <img src="https://www.foodstudio.lk/img/Slideshow/Artboard 6.jpg.jpg" alt="...">
          </div>
                </div>
      </div>
    </div>
    <div class="col-sm-6 aboutus-container" id="about">
      <div class="about-desc-panel">
        <h1 class="text-center underline">About <span class="yellow-text"> Us </span></h1>

        <p>Food Studio has a vision to expand Sri Lanka’s food culture.</p>
        <p>The goal is to redefine Sri Lanka’s gastronomic experiences by breaking free of what we know as a standard food court with the help of our unique vision: a feast for the eyes, irresistible aromas, inspiring taste, and unbeatable company.</p>
        <p>Each location, strategically placed at key retail hubs, is in tandem with global standards, featuring the entire spectrum of favourites from hawker fare to fine dining. With dishes by growing local brands alongside highly coveted international names, Food Studio is where masterpieces in the business of food happen</p>

        <div style="padding-top:20px">
                  <a href="about-us" class="btn btn-readmore"> Learn More </a>
          <!--<a href="about-us" class="btn btn-learn-more">Learn More</a>-->
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row whatson-container flex-align-items-center">
    <div class="col-sm-6 ">
      <div class="whatson-text-panel">
        <h1 class="text-center">What's On</h1>
      </div>
    </div>
    <div class="col-sm-6 ">
      <div class="events-panel">
        <h1 class="mt-0"> <span> Feature Events </span></h1>
       <a href="whats-on"> <h5 class="yellow-text"> The Ultimate Monopoly Deal Challenge</h5></a>
        <!--<p class="event-desc-text">Love gelato? Can't have enough of it? Then here's the perfect challenge for you! Food Studio & Isle of Gelato are bringing you the Brain Freeze Challenge! Rules are simple! Whoever finishes the gelato that is presented to them the fastest walks away the Winner!</p>-->
        <p class="event-desc-text">
            Monopoly is a game that has been in the center of quarrels between
            friends for a long time!
            This is your time to put your Monopoly Deal skills to the test &amp; to once
            and for all settle the debate on who the ultimate Monopoly Deal Player
            is!
        </p>
        
         <a href="whats-on"> <h5 class="yellow-text"> Spicy Mala Challenge</h5></a>
        <p class="event-desc-text">To celebrate World Hot &amp; Spicy Day, we are calling out all the spice fanatics to take part in the Spicy Mala Challenge! You think you can handle the heat of the Spicy Mala Hotpot? Get in touch with us via our social channels to book your spot!</p>

         <a href="whats-on"> <h5 class="yellow-text"> Marvel Quiz</h5></a>
        <p class="event-desc-text">Avengers Assemble! <br> The time has come to assemble your squad to take on the ultimate test of Marvel knowledge! The quiz will test your knowledge of the Infinity Saga with questions spanning across all 23 movies!</p>
          
      </div>
    </div>
  </div>
</div>


<!-- Model -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered " role="document">
   <img src="{{url('img/Coming Soon.png')}}" style="width: 100%;">
  <a> <div style="    position: absolute;
    top: 25px;
    right: 28px;"><i id="close-btn" style="color:#fff;font-size:20px" class="fa fa-times"></i></div></a>
  </div>
</div>



@endsection
