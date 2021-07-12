@extends('frontend.layouts.app')

@section('title', 'Eating challenges, Game nights, Quiz nights, Food Offers, Happy Hour deals')

@section('meta_description', 'The venue to hangout with friends, exciting food challenges, cocktails at the roof top bar,
Colombo city centre and One Galleface. gift card from Food Studio Now')



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

        @foreach($features as $key => $feature)

        <div class="row flex-view m-0 mt-15">
          
          <div class="col-sm-12 p-0">
            <div class="description-panel" style="width: 100%">
              <h3 class="underline">{!!$feature->title!!}</h3>
              <!--<span class="event-details">TBC</span>-->
              <p class="mt-10">{!!$feature->description!!}</p>
              <a href="{!!$feature->link!!}" target="_blank" class="btn btn-readmore"> Learn More </a>
            </div>
          </div>
        </div>

        @endforeach
        
        
      </div>

      <div class="director-detail-panel">
        <h1 class="underline"> Promotions </h1>

        <div class="owl-carousel owl-theme">

        @foreach($promotions as $key => $promo)

          <a href="">
            <div class="item text-center">
              <div class="promotion-img-box ">
                <img src="{{url('files/promotions/',$promo->image)}}" width="100%" height="548px">
                <!-- <div class="presentage"> <span>50%</span> </div> -->
              </div>
            </div>
          </a>

        @endforeach  

          
        </div>
      </div>

      <div class="management-detail-panel">
        <h1 class="underline">Vouchers</h1>

        @foreach($vouchers as $key => $vou)

        <div class="row">
        	<div class="col-md-4">
        		<img src="{{url('files/vouchers/',$vou->image)}}" width="100%">
        	</div>
        	<div class="col-md-4">
        		<h3>
            {!!$vou->description!!}
        		</h3>
        	</div>
        </div><br>

        @endforeach

      </div>
    </div>
  </div>
</div>

@endsection
