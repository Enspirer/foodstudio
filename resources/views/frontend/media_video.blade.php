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
        <li class="active"><a href="{{url('media-video')}}">Videos</a></li>
        <li><a href="{{url('media-social')}}">Social Responsibility</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid videos-container mt-20 mb-20">
  <div class="row">
    <div class="container video-panel p-30">
      <div class="row m-0 mt-10 flex-align-items-center">
        <div class="col-sm-9 p-0">
          <div class="video-content-box p-30 pt-0">
              <div id="youtubeplayer">
                  <!--<iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>-->
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/vJgmSIcMpkM?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-3 p-0">
          <ul class="video-list" id="youtubevideotabs" style="    height: 419px;
    overflow-y: scroll;">
  
            <li youtubeid="vJgmSIcMpkM">
              <a>
                <div class="video-thumbnail flex-align-items-center">
                  <div class="img-box">
                    <img src="https://www.foodstudio.lk/img/t1.jpg">
                    <span><i class="fa fa-play"></i></span>
                  </div>
                  <div class="heading-box">
                    <p>The Story of the Chinese Dumpling</p>
                  </div>
                </div>
              </a>
            </li>
            <li youtubeid="FMxRlrhMlFw">
              <a>
                <div class="video-thumbnail flex-align-items-center">
                  <div class="img-box">
                    <img src="https://www.foodstudio.lk/img/t2.jpg">
                    <span><i class="fa fa-play"></i></span>
                  </div>
                  <div class="heading-box">
                    <p>Beef Rendang by Sumatran Spice</p>
                  </div>
                </div>
              </a>
            </li>
            <li youtubeid="PMjGTB7poDw">
              <a>
                <div class="video-thumbnail flex-align-items-center">
                  <div class="img-box">
                    <img src="https://www.foodstudio.lk/img/t3.jpg">
                    <span><i class="fa fa-play"></i></span>
                  </div>
                  <div class="heading-box">
                    <p>Tuna Roll by Tokyo Shokudo</p>
                  </div>
                </div>
              </a>
            </li>
            <li youtubeid="Mr_p9yU_h1k">
              <a>
                <div class="video-thumbnail flex-align-items-center">
                  <div class="img-box">
                    <img src="https://www.foodstudio.lk/img/t4.jpg">
                    <span><i class="fa fa-play"></i></span>
                  </div>
                  <div class="heading-box">
                    <p>Chicken Teriyaki Don by Tokyo Shokudo</p>
                  </div>
                </div>
              </a>
            </li>
             <li youtubeid="b55Q9SvAIM8">
              <a>
                <div class="video-thumbnail flex-align-items-center">
                  <div class="img-box">
                    <img src="https://www.foodstudio.lk/img/t5.jpg">
                    <span><i class="fa fa-play"></i></span>
                  </div>
                  <div class="heading-box">
                    <p>Mala Steamboat by China Express</p>
                  </div>
                </div>
              </a>
            </li>
              <li youtubeid="FKVzHYkVf4c">
              <a>
                <div class="video-thumbnail flex-align-items-center">
                  <div class="img-box">
                    <img src="https://www.foodstudio.lk/img/t6.png">
                    <span><i class="fa fa-play"></i></span>
                  </div>
                  <div class="heading-box">
                    <p>World Food Day 2020</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <script>
        
    </script>
    
  </div>
</div>



@endsection
