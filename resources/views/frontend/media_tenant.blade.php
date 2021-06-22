@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="page-banner">
  <div class="row" style="height:100%">
	  <div class="container-fluid" style="height:100%">
      <div class="banner-img-div" style="overflow: hidden;height:100%">
        <img src="https://www.foodstudio.lk/img/meals_Mains.png" width="100%" style="height:100%">
      </div>
      <div class="scroll-next-indicator">
        <div class="indicator-container">
          <div class="indicator-arrow top">
            <a href="#">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
          </div>
          <div class="indicator-arrow bottom">
            <a href="#">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="media-navigation">
      <ul class="list-inline">
        <li><a href="media">Corporate News</a></li>
        <li class="active"><a href="http://127.0.0.1:8000/media-tenant">Tenants News</a></li>
        <li><a href="http://127.0.0.1:8000/media-video">Videos</a></li>
        <li><a href="http://127.0.0.1:8000/media-social">Social Responsibility</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid media-container">
  <div class="row">
    <div class="container">
      <div class="row tenent-media-panel flex-align-items-center m-0">
        <div class="col-sm-6 p-30 pr-20 tenant-img-container">
          <div class="tenanent-news-box">
            <img src="https://www.foodstudio.lk/img/news/news_03.jpg" width="100%">
          </div>
        </div>
        <div class="col-sm-6 tenant-desc-container p-30 pl-20">
          <div class="description-panel">
            <img src="https://www.foodstudio.lk/img/news/logo1.png" width="18%">
            <p class="date mt-10">29 August 2020</p>
            <a href="http://www.ft.lk/ft-lite/The-Sizzle-opens-outlet-at-Food-Studio-Colombo-City-Centre/6-705279" target="_blank">
            <h3 class="underline-sm">The Sizzle opens outlet at Food Studio, Colombo City Centre</h3></a>
            <p class="mt-20">The Sizzle has opened its latest outlet in Food Studio at the Colombo City Centre and is all set to serve the local community.
                Lovers of the sizzling platters in Colombo can now head over to the restaurant’s brand-new outlet at Food Studio, located at the third floor
                of Colombo City Centre – a very convenient and easy-to-reach location with ample parking space, and enjoy their yummy choices.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <div class="row">
    <div class="container">
      <div class="row tenent-media-panel flex-align-items-center m-0">
        <div class="col-sm-6 p-30 pr-20 tenant-img-container">
          <div class="tenanent-news-box">
            <img src="https://www.foodstudio.lk/img/news/news_04.jpg" width="100%">
          </div>
        </div>
        <div class="col-sm-6 tenant-desc-container p-30 pl-20">
          <div class="description-panel">
            <img src="https://www.foodstudio.lk/img/news/logo2.png" width="18%">
            <p class="date mt-10">14 November 2018</p>
            <a href="https://www.pulse.lk/restaurant-reviews/isle-of-gelato-food-studio/" target="_blank">
            <h3 class="underline-sm">Isle of Gelato at Food Studio</h3></a>
            <p class="mt-20">Isle of Gelato is a Galle favourite, and became even more popular when they opened at Caramel Pumpkin. Their newest location is at Colombo City Centre, and we absolutely love it! After all, who doesn’t love ice cream?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
      <div class="row">
    <div class="container">
      <div class="row tenent-media-panel flex-align-items-center m-0">
        <div class="col-sm-6 p-30 pr-20 tenant-img-container">
          <div class="tenanent-news-box">
            <img src="https://www.foodstudio.lk/img/news/news_05.jpg" width="100%">
          </div>
        </div>
        <div class="col-sm-6 tenant-desc-container p-30 pl-20">
          <div class="description-panel">
            <img src="https://www.foodstudio.lk/img/news/logo3.png" width="18%">
            <p class="date mt-10">18 July 2019</p>
            <a href="https://foodieslanka.com/places/lunch-1/suksamran-thai-one-galle-face/" target="_blank">
            <h3 class="underline-sm">Suksamran Thai (One Galle Face) – Food Studio</h3></a>
            <p class="mt-20">When you have a Thai chef at the helm of operations, you really can’t go wrong. This is perhaps what makes the Thai kiosk at the Food Studio, One Galle Face mall so special. In Thai “suk” means happy and eating from this outlet will definitely leave you with lots of that.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
       <div class="row">
    <div class="container">
      <div class="row tenent-media-panel flex-align-items-center m-0">
        <div class="col-sm-6 p-30 pr-20 tenant-img-container">
          <div class="tenanent-news-box">
            <img src="https://www.foodstudio.lk/img/news/news_06.jpg" width="100%">
          </div>
        </div>
        <div class="col-sm-6 tenant-desc-container p-30 pl-20">
          <div class="description-panel">
            <img src="https://www.foodstudio.lk/img/news/logo3.png" width="18%">
            <p class="date mt-10">18 July 2019</p>
            <a href="https://foodieslanka.com/places/breakfast-1/jeewas-one-galle-face/" target="_blank">
            <h3 class="underline-sm">Jeewa’s (One Galle Face) – Food Studio</h3></a>
            <p class="mt-20">Colombo has long been this nation’s commercial capital with thousands flocking to the city daily for work. Today, however it is also a modern metropolis with urban living and tourist inflows ever-increasing. This is probably one of the reasons why you see so many food outlets of various cuisines being opened up daily. But sometimes it gets a little difficult to find our very own rice and curry among the plethora.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
         <div class="row">
    <div class="container">
      <div class="row tenent-media-panel flex-align-items-center m-0">
        <div class="col-sm-6 p-30 pr-20 tenant-img-container">
          <div class="tenanent-news-box">
            <img src="https://www.foodstudio.lk/img/news/news_07.jpg" width="100%">
          </div>
        </div>
        <div class="col-sm-6 tenant-desc-container p-30 pl-20">
          <div class="description-panel">
            <img src="https://www.foodstudio.lk/img/news/logo3.png" width="18%">
            <p class="date mt-10">18 July 2019</p>
            <a href="https://foodieslanka.com/places/breakfast-1/twister-one-galle-face-food-studio/" target="_blank">
            <h3 class="underline-sm">Twister (One Galle Face) – Food Studio</h3></a>
            <p class="mt-20">One Galle Face literally took Colombo by storm. From the opening date to this very day there has been a steady flow of tourists, window shoppers, jaywalkers and genuine buyers walking the extensive halls. It is quite an extent for a mall and going through one floor alone can have you exhausted.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
      <div class="row">
    <div class="container">
      <div class="row tenent-media-panel flex-align-items-center m-0">
        <div class="col-sm-6 p-30 pr-20 tenant-img-container">
          <div class="tenanent-news-box">
            <img src="https://www.foodstudio.lk/img/news/news_01.jpg" width="100%">
          </div>
        </div>
        <div class="col-sm-6 tenant-desc-container p-30 pl-20">
          <div class="description-panel">
            <img src="https://www.foodstudio.lk/img/news/header-adaderana-biz-new-logo.png" width="18%">
            <p class="date mt-10">03 March 2020</p>
            <a href="http://bizenglish.adaderana.lk/brave-blokes-take-on-the-monster-burger-challenge-at-cheeseheads/" target="_blank">
            <h3 class="underline-sm">Brave blokes take on the ‘Monster Burger’ challenge at Cheeseheads</h3></a>
            <p class="mt-20">If a cheeseburger filled with cheese sauce is not already cheesy enough, how about the patty stuffed with mozzarella too? Last week, gutty contestants took on a trailblazing food challenge when Cheeseheads...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--<div class="row">-->
  <!--  <div class="container">-->
  <!--    <div class="row tenent-media-panel flex-align-items-center m-0">-->
  <!--      <div class="col-sm-6 tenant-desc-container p-30 pr-20">-->
  <!--        <div class="description-panel">-->
  <!--          <img src="https://www.foodstudio.lk/img/CCC/Sumatran_Spice/Sumatran_Spice_100.jpg" width="18%">-->
  <!--          <p class="date mt-10">02 June 2020</p>-->
  <!--          <h3 class="underline-sm">Lorem Ipsum is simply dummy text.</h3>-->
  <!--          <p class="mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to-->
  <!--            make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-sm-6 tenant-img-container p-30 pl-20">-->
  <!--        <div class="tenanent-news-box">-->
  <!--          <img src="https://www.foodstudio.lk/img/tenants_news_02.png" width="100%">-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <!--<div class="row">-->
  <!--  <div class="container">-->
  <!--    <div class="row tenent-media-panel flex-align-items-center m-0">-->
  <!--      <div class="col-sm-6 tenant-img-container p-30 pr-20">-->
  <!--        <div class="tenanent-news-box">-->
  <!--          <img src="https://www.foodstudio.lk/img/tenants_news_03.png" width="100%">-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-sm-6 tenant-img-container p-30 pl-20">-->
  <!--        <div class="description-panel">-->
  <!--          <img src="https://www.foodstudio.lk/img/CCC/Okra/Okra_100.jpg" width="18%">-->
  <!--          <p class="date mt-10">02 June 2020</p>-->
  <!--          <h3 class="underline-sm">Lorem Ipsum is simply dummy text.</h3>-->
  <!--          <p class="mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to-->
  <!--            make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
</div>



@endsection
