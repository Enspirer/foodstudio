@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="page-banner whatson-container">
  <div class="row">
    <div class="container-fluid">
	    <div class="banner-img-div " style="overflow: hidden;">
    </div>
  </div>
	</div>

	<div class="scroll-next-indicator">
	  <div class="indicator-container">
	    <div class="indicator-arrow top">
	      <a href="#whatson">
	        <i class="fa fa-angle-down" aria-hidden="true"></i>
	        <i class="fa fa-angle-down" aria-hidden="true"></i>
	        <i class="fa fa-angle-down" aria-hidden="true"></i>
	      </a>
	    </div>
	    <div class="indicator-arrow bottom">
	      <a href="#whatson">
	        <i class="fa fa-angle-down" aria-hidden="true"></i>
	        <i class="fa fa-angle-down" aria-hidden="true"></i>
	        <i class="fa fa-angle-down" aria-hidden="true"></i>
	      </a>
	    </div>
	  </div>
	</div>
</div>






<div class="container home-page-container" id="whatson">
  <div class="row team-container m-0 mt-20">
    <div class="col-sm-12">
      <div class="chairman-detail-panel">
        <h1 class="underline">
          Feature <span class="yellow-text">Events</span>
        </h1>
        <div class="row flex-view m-0 mt-15">
          <!-- <div class=" col-sm-4 event-img-box">
            <img src="https://www.foodstudio.lk/img/event_01.png" width="100%">
          </div> -->

          <div class="col-sm-12 p-0">
            <div class="description-panel" style="width: 100%">
              <h3 class="underline">The Ultimate Monopoly Deal Challenge</h3>
              <!--<span class="event-details">TBC</span>-->
              <p class="mt-10">Monopoly is a game that has been in the center of quarrels between
friends for a long time!
This is your time to put your Monopoly Deal skills to the test & to once
and for all settle the debate on who the ultimate Monopoly Deal Player
is!</p>
              <a href="https://www.facebook.com/media/set/?vanity=FoodStudioSL&set=a.2245653755742627" target="_blank" class="btn btn-readmore"> Learn More </a>
            </div>
          </div>
        </div>
        <div class="row flex-view m-0 mt-15">
          <!-- <div class=" col-sm-4 event-img-box">
            <img src="https://www.foodstudio.lk/img/event_01.png" width="100%">
          </div> -->

          <div class="col-sm-12 p-0">
            <div class="description-panel" style="width: 100%">
              <h3 class="underline">Spicy Mala Challenge</h3>
              <!--<span class="event-details">TBC</span>-->
              <p class="mt-10">To celebrate World Hot & Spicy Day, we are calling out all the spice fanatics to take part in the Spicy Mala Challenge! You think you can handle the heat of the Spicy Mala Hotpot? Get in touch with us via our social channels to book your spot!</p>

              <a href="https://www.facebook.com/media/set/?vanity=FoodStudioSL&set=a.2216697548638248" target="_blank" class="btn btn-readmore"> Learn More </a>
            </div>
          </div>
        </div>
        <div class="row flex-view m-0 mt-15">
          <!-- <div class=" col-sm-4 event-img-box">
            <img src="https://www.foodstudio.lk/img/event_01.png" width="100%">
          </div> -->

          <div class="col-sm-12 p-0">
            <div class="description-panel" style="width: 100%">
              <h3 class="underline"> Marvel Quiz</h3>
              <!--<span class="event-details">TBC</span>-->
              <p class="mt-10">Avengers Assemble! <br> The time has come to assemble your squad to take on the ultimate test of Marvel knowledge! The quiz will test your knowledge of the Infinity Saga with questions spanning across all 23 movies!</p>

              <a href="https://www.facebook.com/media/set/?vanity=FoodStudioSL&set=a.2255774948063841" target="_blank" class="btn btn-readmore"> Learn More </a>
            </div>
          </div>
        </div>
      </div>

      <div class="director-detail-panel">
        <h1 class="underline"> Promotions </h1>

        <div class="owl-carousel owl-theme">
          <a href="">
            <div class="item text-center">
              <div class="promotion-img-box ">
                <img src="https://www.foodstudio.lk/img/promotion/whatsonpromo_1.jpg" width="100%">
                <!-- <div class="presentage"> <span>50%</span> </div> -->
              </div>
            </div>
          </a>

          <a href="">
            <div class="item text-center">
              <div class="promotion-img-box">
                <img src="https://www.foodstudio.lk/img/promotion/whatsonpromo_2.jpg" width="100%">
                <!-- <div class="presentage"> <span>50%</span> </div> -->
              </div>
            </div>
          </a>

          <a href="">
            <div class="item text-center">
              <div class="promotion-img-box">
                <img src="https://www.foodstudio.lk/img/promotion/whatsonpromo_3.jpg" width="100%">
                <!-- <div class="presentage"> <span>50%</span> </div> -->
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="management-detail-panel">
        <h1 class="underline">Vouchers</h1>

        <div class="row">
        	<div class="col-md-4">
        		<img src="https://www.foodstudio.lk/img/vouchers/voucher_1.png" width="100%">
        	</div>
        	<div class="col-md-4">
        		<h3>
        		    To purchase Food Studio vouchers, please contact <br> 071 2630 111.
        		</h3>
        	</div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
