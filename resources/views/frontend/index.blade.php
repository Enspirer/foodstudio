@extends('frontend.layouts.app')

@section('title', 'Best Multi Cuisine Food Court with outdoor bar in Colombo |Food Studio')
@section('meta_description', 'International cuisines: The Best Food court experience in Colombo. Endless choices of')

@section('content')

<div class="landing-body home-main-baner ">
  <div class="row  landing-sec-container m-0">
    <div class="col-sm-6 p-0 window-height landing-sec landing-sec-1 ccc-box" style="height: 476px;">
      <a href="{{url('tenant-and-cuisines/1')}}">
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
      <a href="{{url('tenant-and-cuisines/2')}}">
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
        
        @foreach($images as $key => $ima)

        @if($key == 0)
        <div class="item active">
            <img src="{{url('files/home_page/',$ima->image)}}" alt="...">
          </div>
        @else
          <div class="item">
            <img src="{{url('files/home_page/',$ima->image)}}" alt="...">
          </div>
        @endif
          
                  
          @endforeach

        


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
                  <a href="{{url('about-us')}}" class="btn btn-readmore"> Learn More </a>
          <!--<a href="about-us" class="btn btn-learn-more">Learn More</a>-->
        </div>
      </div>
    </div>
  </div>
</div>

@if(count($feature) == 0)

@else

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


        @foreach($feature as $key => $fea)

       <a href="{{url('whats-on')}}"> <h5 class="yellow-text"> {!!$fea->title!!}</h5></a>
        
        <p class="event-desc-text">
          {!!$fea->description!!}
        </p>

        @endforeach
        

      </div>
    </div>
  </div>
</div>

@endif




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
