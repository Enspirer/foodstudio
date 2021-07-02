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
        <li><a href="{{url('media')}}">Corporate News</a></li>
        <li><a href="{{url('media-tenant')}}">Tenants News</a></li>
        <li><a href="{{url('media-video')}}">Videos</a></li>
        <li class="active"><a href="{{url('media-social')}}">Social Responsibility</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid social-container mt-20 mb-20">
  <div class="row">
    <div class="container social-res-panel">
      <div class="row m-0 flex-align-items-center">
        <div class="col-sm-6 p-40 pr-20">
          <div class="tenanent-news-box">
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/FKVzHYkVf4c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            <!--<img src="https://www.foodstudio.lk/img/tenants_news_01.png" width="100%">-->
          </div>
        </div>
        <div class="col-sm-6 p-40 pl-20">
          <div class="description-panel">
            <!--<p class="date mt-10">02 June 2020</p>-->
            <h4 class="underline-sm">
World Food Day 2020</h4>
            <p class="mt-20">Food Studio in partnership with IWMI &amp; Food and Agriculture Organization of the United Nations is taking action to ensure #ZeroWaste by finding innovative approaches to Reduce, Recycle &amp; Reuse food waste at all our outlets.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container social-res-panel">
      <div class="row m-0 flex-align-items-center">
        <div class="col-sm-6 p-40 pl-20">
          <div class="tenanent-news-box">
            <img src="https://www.foodstudio.lk/img/178924125_2555970224710977_2332768624476573998_n.jpg" width="100%">
          </div>
        </div>
        <div class="col-sm-6 p-40 pr-20">
          <div class="description-panel">
            <!--<p class="date mt-10">02 June 2020</p>-->
            <h4 class="underline-sm">WE FIGHT FOOD WASTE!</h4>
            <p class="mt-20">Our mission is to ignite change regarding the global food waste issue. Together with the Food &amp; Agricultural Organization of the United Nations, Food Studio today launches a campaign to not only draw attention to the problem, but also to engage with society at all levels, including our own staff, in sharing practical, creative and impactful ways we can all change our behavior to minimize food waste.
Let's start by not feeding our garbage bins. Simple actions from both the vendors &amp; consumers alike can help us take significant strides towards minimizing food waste.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--<div class="row">-->
  <!--  <div class="container social-res-panel">-->
  <!--    <div class="row m-0 flex-align-items-center">-->
  <!--      <div class="col-sm-6 p-40 pr-20">-->
  <!--        <div class="tenanent-news-box">-->
  <!--          <img src="https://www.foodstudio.lk/img/tenants_news_03.png" width="100%">-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-sm-6 p-40 pl-20">-->
  <!--        <div class="description-panel">-->
  <!--          <p class="date mt-10">02 June 2020</p>-->
  <!--          <h4 class="underline-sm">Lorem Ipsum is simply dummy text.</h4>-->
  <!--          <p class="mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to-->
  <!--            make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
</div>



@endsection
