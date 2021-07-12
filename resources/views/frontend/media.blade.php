@extends('frontend.layouts.app')

@section('title', 'Corporate news | Tenant news | social responsibility |Food Video | Food Studio')

@section('content')

<div class="page-banner">
  <div class="row" style="height:100%">
	  <div class="container-fluid" style="height:100%">
      <div class="banner-img-div" style="overflow: hidden;height:100%">
        <img src="{{url('img/meals_Mains.png')}}" width="100%" style="height:100%">
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
        <li class="active"><a href="{{url('media')}}">Corporate News</a></li>
        <li><a href="{{url('media-tenant')}}">Tenants News</a></li>
        <li><a href="{{url('media-video')}}">Videos</a></li>
        <li><a href="{{url('media-social')}}">Social Responsibility</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid corporate-container mt-20 mb-20">
  <div class="row">
    <div class="container corporate-panel p-30">
      <div class="row flex-align-items-center">
        <!--<div class="col-sm-6 mt-20 ">-->
        <!--  <a href="https://www.foodstudio.lk/events-inner?news_id=1">-->
        <!--    <div class="news-image-box">-->
        <!--      <img src="https://www.foodstudio.lk/img/news/news_01.jpg" width="100%">-->
        <!--      <div class="highlight-news">Top News</div>-->
        <!--    </div>-->
        <!--    <div class="news-details-box">-->
        <!--      <h3>Brave blokes take on the ‘Monster Burger’ challenge at Cheeseheads</h3>-->
        <!--      <p>If a cheeseburger filled with cheese sauce is not already cheesy enough, how about the patty stuffed with mozzarella too? Last week, gutty contestants took on a trailblazing food challenge when Cheeseheads...</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->

   <!--<div class="col-sm-6 mt-20 ">-->
   <!--       <a href="http://bizenglish.adaderana.lk/brave-blokes-take-on-the-monster-burger-challenge-at-cheeseheads/" target="_blank">-->
   <!--         <div class="news-image-box">-->
   <!--           <img src="https://www.foodstudio.lk/img/news/news_01.jpg" width="100%">-->
   <!--           <div class="highlight-news">Top News</div>-->
   <!--         </div>-->
   <!--         <div class="news-details-box">-->
   <!--           <h3>Brave blokes take on the ‘Monster Burger’ challenge at Cheeseheads</h3>-->
   <!--           <p>If a cheeseburger filled with cheese sauce is not already cheesy enough, how about the patty stuffed with mozzarella too? Last week, gutty contestants took on a trailblazing food challenge when Cheeseheads...</p>-->
   <!--         </div>-->
   <!--       </a>-->
   <!--     </div>-->
   @foreach($cnewstop as $key => $ctop)

        <div class="col-sm-6 mt-20 news-main-box">
          <a href="{!!$ctop->link!!}" target="_blank">
            <div class="news-image-box">
              <img src="{{url('files/corporate_news/',$ctop->image)}}" width="100%" height="500px">
              <div class="highlight-news">Top News</div>--&gt;
            </div>
            <div class="news-details-box">
              <h3>{!!$ctop->title!!}</h3>
              <p>{!!$ctop->description!!}</p>
            </div>
          </a>
        </div>
        @endforeach    

        @foreach($cnewsfeatured as $key => $cfeatured)
        
        <div class="col-sm-6 mt-20 news-main-box">
          <a href="{!!$cfeatured->link!!}" target="_blank">
            <div class="news-image-box">
              <img src="{{url('files/corporate_news/',$cfeatured->image)}}" width="100%" height="500px">
              <div class="highlight-news">Featured Story</div>--&gt;
            </div>
            <div class="news-details-box">
              <h3>{!!$cfeatured->title!!}</h3>
              <p>{!!$cfeatured->description!!}</p>
            </div>
          </a>
        </div>

        @endforeach
        
       
      </div>

<br>

  @foreach($cnews as $key => $cnew)

      <!-- <div class="row flex-align-items-center"> -->
     
        <div class="col-sm-6 mt-20 news-main-box">
          <a href="{!!$cnew->link!!}" target="_blank">
            <div class="news-image-box">
              <img src="{{url('files/corporate_news/',$cnew->image)}}" width="100%" height="500px">
      
            </div>
            <div class="news-details-box">
              <h3>{!!$cnew->title!!}</h3>
              <p>{!!$cnew->description!!}</p>
            </div>
          </a>
        </div>
        
     <!-- </div> -->
     
  @endforeach  


      <!-- <div class="row flex-align-items-center">
       <div class="col-sm-6 mt-20 news-main-box">
         <a href="https://www.foodstudio.lk/events-inner?news_id=1">
           <div class="news-image-box">
             <img src="https://www.foodstudio.lk/img/news_03.png" width="100%">
             <div class="news-date">
               <span class="date">02</span> <br>
               <span class="month">June</span> <br>
               <span class="year">2020</span>
             </div>
           </div>
           <div class="news-details-box">
             <h3>Lorem Ipsum is simply dummy text</h3>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text...</p>
           </div>
         </a>
       </div>

       <div class="col-sm-6 mt-20 news-main-box">
         <a href="https://www.foodstudio.lk/events-inner?news_id=1">
           <div class="news-image-box">
             <img src="https://www.foodstudio.lk/img/news_04.png" width="100%">
             <div class="news-date">
               <span class="date">01</span> <br>
               <span class="month">June</span> <br>
               <span class="year">2020</span>
             </div>
           </div>
           <div class="news-details-box">
             <h3>Lorem Ipsum is simply dummy text</h3>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text...</p>
           </div>
         </a>
       </div>
      </div> -->

      <!-- <div class="row flex-align-items-center">
       <div class="col-sm-6 mt-20 news-main-box">
         <a href="https://www.foodstudio.lk/events-inner?news_id=1">
           <div class="news-image-box">
             <img src="https://www.foodstudio.lk/img/news_05.png" width="100%">
             <div class="news-date">
               <span class="date">25</span> <br>
               <span class="month">May</span> <br>
               <span class="year">2020</span>
             </div>
           </div>
           <div class="news-details-box">
             <h3>Lorem Ipsum is simply dummy text</h3>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text...</p>
           </div>
         </a>
       </div>

       <div class="col-sm-6 mt-20 news-main-box">
         <a href="https://www.foodstudio.lk/events-inner?news_id=1">
           <div class="news-image-box">
             <img src="https://www.foodstudio.lk/img/news_06.png" width="100%">
             <div class="news-date">
               <span class="date">09</span> <br>
               <span class="month">May</span> <br>
               <span class="year">2020</span>
             </div>
           </div>
           <div class="news-details-box">
             <h3>Lorem Ipsum is simply dummy text</h3>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text...</p>
           </div>
         </a>
       </div>
      </div> -->


    </div>
  </div>
</div>



@endsection
