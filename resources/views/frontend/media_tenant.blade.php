@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

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
        <li><a href="{{url('media')}}">Corporate News</a></li>
        <li class="active"><a href="{{url('media-tenant')}}">Tenants News</a></li>
        <li><a href="{{url('media-video')}}">Videos</a></li>
        <li><a href="{{url('media-social')}}">Social Responsibility</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid media-container">


@foreach($tnews as $key => $tnew)

  <div class="row">
    <div class="container">
      <div class="row tenent-media-panel flex-align-items-center m-0">
        <div class="col-sm-6 p-30 pr-20 tenant-img-container">
          <div class="tenanent-news-box">
            <img src="{{url('files/tenant_news/',$tnew->image)}}" width="100%">
          </div>
        </div>
        <div class="col-sm-6 tenant-desc-container p-30 pl-20">
          <div class="description-panel">
            <img src="{{url('files/tenant_news/',$tnew->logo)}}" width="18%">
            <p class="date mt-10">{{ date('d F Y', strtotime($tnew->created_at))  }}</p>
            <a href="{{ $tnew->link }}" target="_blank">
            <h3 class="underline-sm">{{ $tnew->title }}</h3></a>
            <p class="mt-20">{{ $tnew->description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endforeach 
  
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
