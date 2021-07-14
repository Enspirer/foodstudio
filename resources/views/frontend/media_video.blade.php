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
      
      @if($defaultvideo != null)
      <input type="hidden" value="{{ preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $defaultvideo->link, $defaultmatch) }}" />
      
      <div id="ytb" youtubeid="{{$defaultmatch[0]}}">
      </div>

      <div class="col-sm-9 p-0">
          <div class="video-content-box p-30 pt-0">
              <div id="youtubeplayer">
                  <!--<iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>-->
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $defaultmatch[0] }}?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
              </div>
          </div>
        </div>
       @endif


        

        
        
                    
        
        <div class="col-sm-3 p-0">

          <ul class="video-list" id="youtubevideotabs" style="    height: 419px;
    overflow-y: scroll;">

        @foreach($videos as $key => $video)

        
        <input type="hidden" value="{{ preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $video->link, $matches) }}" />
        

            <li youtubeid="{{ $matches[0] }}">
            
              <a>
                <div class="video-thumbnail flex-align-items-center">
                  <div class="img-box">
                    <img src="{{url('files/video_thumbnail/',$video->thumbnail)}}">
                    <span><i class="fa fa-play"></i></span>
                  </div>
                  <div class="heading-box">
                    <p>{{ $video->title }}</p>
                  </div>
                </div>
              </a>
            </li>

            @endforeach 

            <!-- <li youtubeid="FMxRlrhMlFw">
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
            </li> -->

                      


          </ul>


        </div>
      </div>
    </div>
    
    <script>
        
    </script>
    
  </div>
</div>



@endsection
