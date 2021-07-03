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


@foreach($socialres as $key => $social)

@if($social->type =='1') 

<input type="hidden" value="{{ preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $social->video, $matches) }}" />
  <div class="row">
    <div class="container social-res-panel">
      <div class="row m-0 flex-align-items-center">
        <div class="col-sm-6 p-40 pr-20">
          <div class="tenanent-news-box">
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $matches[0] }}"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                <!-- https://www.youtube.com/watch?v=FITTkh-kf6g -->
            <!--<img src="https://www.foodstudio.lk/img/tenants_news_01.png" width="100%">-->
          </div>
        </div>
        <div class="col-sm-6 p-40 pl-20">
          <div class="description-panel">
            <!--<p class="date mt-10">02 June 2020</p>-->
            <h4 class="underline-sm">{{ $social->title }}</h4>
            <p class="mt-20">{{ $social->description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @else

  <div class="row">
    <div class="container social-res-panel">
      <div class="row m-0 flex-align-items-center">
        <div class="col-sm-6 p-40 pl-20">
          <div class="tenanent-news-box">
            <img src="{{url('files/social_responsible/',$social->image)}}" width="100%">
          </div>
        </div>
        <div class="col-sm-6 p-40 pr-20">
          <div class="description-panel">
            <!--<p class="date mt-10">02 June 2020</p>-->
            <h4 class="underline-sm">{{ $social->title }}</h4>
            <p class="mt-20">{{ $social->description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endif

  @endforeach 


</div>



@endsection
