@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div id="container">
<div id="slideshow">
  <img src="{{url('img/about_slide/About us banner-01.jpg')}}" style="opacity: 0;">
  <img src="{{url('img/about_slide/About us banner-02.jpg')}}" style="opacity: 0;">
  <!--<img src="https://www.foodstudio.lk/img/about_slide/About us banner-03.jpg">-->
    <img src="{{url('img/about_slide/About us banner-04.jpg')}}" style="opacity: 0;">
      <img src="{{url('img/about_slide/About us banner-05.jpg')}}" style="opacity: 0;">
            <img src="{{url('img/about_slide/About us banner-06.jpg')}}" style="opacity: 0;">
</div>

</div>

<div class="container " id="about_page">
    
    <div class="row">
        <div class="about-desc-panel">          
          <h1 class="text-center underline">Who <span class="yellow-text"> We Are </span></h1>
          
          <p class="">As Colombo's skyline evolves, taking on a more global feel, its population is increasingly opting for the perks of vertical living. This new trend in urbanisation perfectly positions Food Studio as an easily accessible option, complete with an abundance of choice.</p>
          <p class="">Introduced to Sri Lanka through the high-end shopping malls of Colombo’s most prestigious mixed-use development projects, Food Studio is a one-of-a-kind dining experience. More than simply a food court, the Food Studio experience begins from the moment customers enter the sweeping market-style layout, with specially designed seating areas and thematic installations that adds a certain aura to the display of flavours. Our patrons are treated to a mouth-watering array of cuisines, many of which are plated up by Sri Lankan homegrown brands.</p>
        </div>
    </div>
    
    
    <div class="row">
        <div class="about-desc-panel">

          <h1 class="text-center underline">From Weekend <span class="yellow-text"> Stalls To Stylish Malls</span></h1>
          
          <p class="">Our local gastronomy enthusiasts begin their own ventures into the restaurant business for a love of good food. Passionately perfecting their recipes and basic branding, these budding restaurateurs serve their loyal customers at weekend markets and pop-up stalls, relying on social media to sustain their growth.</p>
          <p class="">This is where Food Studio steps in. With a vision to expand Sri Lanka’s food culture, each of our food spaces hosts a wealth of local brands serving customers alongside highly coveted international names. Specifically designed to suit the location’s requirements, our spaces could take on a hawker-themed setting with a restaurant-style seating layout, or they could lean more towards a conventional food court. Food Studio space design is always flexible.</p>
          <p class="">Not only do we provide a space for growing brands, we also provide a “shell” where each business owner can choose what they need to support their trade. Food Studio is always specially laid out to bring together the right mix of eateries, with the tastiest ranging from the adventurous to the nostalgic, from street food to fine dining, and from East Asian sushi to artisanal gelato. Under one roof, customers can be assured of quality, variety, affordability and comfort.</p>

        </div>
    </div>

    <!-- <div class="row flex-align-items-center m-0">
      <div class="col-sm-6">
        <div class="overview-content">
          <div class="vision-panel">
            <h1 class="underline">Vision</h1>
            <p class="text-center">
            <blockquote>
              <b>&ldquo;</b>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              <b>&rdquo;</b>
            </blockquote>
            </p>
          </div>

          <div class="mission-panel">
            <h1 class="underline">Mission</h1>
            <p class="text-center">
            <blockquote>
              <b>&ldquo;</b>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              <b>&rdquo;</b>
            </blockquote>
            </p>
          </div>
        </div>
      </div>

    </div> -->

    
    
    <div class="row team-container m-0">
      <div class="col-sm-12">
        <div class="chairman-detail-panel">
          <h1 class="underline">
            Our <span class="yellow-text">Team</span>
          </h1>

          <div class="row m-0">
            <div class="col-sm-3">
              <div class="director-profile">
                <img src="img/Director/TT.jpg" style="width:100%">
              </div>

              <div class="details-box">
                <!--<h2>Tai Toon Lim</h2>-->
                <!--<p>Chairman</p>-->
              </div>
            </div>
            <div class="col-sm-9">
                <p class="yellow-text" style="padding: 70px 20px 20px 20px;font-family: 'Playfair Display', serif;font-weight: 900;
    font-style: italic;
    text-align: center;    font-size: 23px;">" The ethos guiding Food Studio SL is to build a farm-to-table community of local and international F&amp;B stakeholders to connect and collaborate with each other so as to bring unique, diverse and affordable dining experience to Sri Lanka. "</p>
    <h2 style=" text-align: center;    margin: 0; "><b>Tai Toon Lim</b></h2>
      <p style=" text-align: center; ">Chairman</p>
            </div>
          </div>


          @foreach($datas as $key => $data)

          <h1 class="underline">
            {!!$data->html_code!!}
          </h1>
          
          <div class="row m-0">

          @foreach(App\Models\Team::where('jobgroup_name',$data->id)->get() as $dat)

              @if($data->jobgroup_name =='Directors')

                <div class="col-sm-3">
                <div class="director-profile">
                  <img src="{{url('files/profile/',$dat->image)}}" style="width:100%" >
                </div>

                <div class="details-box">
                  <h4>{{ $dat->name }}</h4>
                  <p>{{ $dat->job_role }}</p>
                </div>
              </div>

              @elseif($data->jobgroup_name =='Non-Executive Directors')

                <div class="col-sm-2 twenty-percent-width">
                  <div class="director-profile">
                    <img src="{{url('files/profile/',$dat->image)}}" style="width:100%" >
                  </div>

                  <div class="details-box">
                    <h4>{{ $dat->name }}</h4>
                    <!-- <p>{{ $dat->job_role }}</p> -->
                  </div>
                </div>

              @else

                <div class="col-sm-2 twenty-percent-width">
                  <div class="director-profile">
                    <img src="{{url('files/profile/',$dat->image)}}" style="width:100%" >
                  </div>

                  <div class="details-box">
                    <h4>{{ $dat->name }}</h4>
                    <p>{{ $dat->job_role }}</p>
                  </div>
                </div>
                
              @endif

            
            @endforeach

        </div>
            
          @endforeach  
                       
                 
   </div>         
           
    </div>
  </div>

</div>

@endsection
