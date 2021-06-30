@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="container tenant-container" id="tenant">
    
     <div class="text-center row m-auto">
        <div class="about-desc-panel">


          
          <h1 class="text-center underline" style=" margin: 27px auto;">Two Prime Locations at  <span class="yellow-text"> your choice </span></h1>
          
          <p class="">Meet the local and international food brands we’ve taken under our wing, and the creative foodies behind them. Our unique mix of eateries stems from the authenticity of the talented chefs, creative homegrown brands and franchises that catch our eye during the selection process.</p>
          <p class="">The plans we have in store for them include growing the local brands internationally, so read on to discover their superhero origin stories, as well as some tips on their best bites, before they become world-famous!</p>
        </div>
    </div>
    
    
    
    
    
    
  <!--<div class="row m-0 mt-50">-->
  <!--  <h1 class="mt-0 text-center underline"> Two Prime Locations at your choice </h1>-->
  <!--  <br>-->
  <!--  <div class="description-panel tenant-description">-->
  <!--    <p>Meet the local and international food brands we’ve taken under our wing, and the creative foodies behind them. Our unique mix of eateries stems from the authenticity of the talented chefs, creative homegrown brands and franchises that catch our eye during the selection process.</p>-->
  <!--    <p>The plans we have in store for them include growing the local brands internationally, so read on to discover their superhero origin stories, as well as some tips on their best bites, before they become world-famous!</p>-->
  <!--  </div>-->
  <!--</div>-->

  <div class="row m-0">
  	<p class="mb-30 text-center">
  		<span style="color: #e0a10a;"> Click on the logo to view tenants </span>
  	</p>
    <div class="landing-body home-main-baner">
    	&nbsp;
    </div>
  </div>

  <ul class="nav nav-tabs mb-30" role="tablist" style="display: flex; justify-content: center; border-bottom: none;">
  	  
      @foreach($datas as $key => $data)               

    <li class="tenant-tab">
      <a style="border: 1px solid;border-radius: 8px;display: flex;" href="http://127.0.0.1:8000/tenant-and-cuisines/{{ $data->id }}" aria-expanded="false">
        <img src="{{url('files/branch_logo/',$data->logo)}}" style="margin: auto;">
      </a>
    </li>          
      
    @endforeach
  	  	
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content menu-main-panel">
  	<div class="tab-pane active" id="1">
  		<div class="row m-0">

      @foreach($tenants as $key => $ten) 

        <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('{{url('files/tenants/',$ten->menu)}}'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(9)">
              <div class="name-logo-container">
                <img src="{{url('files/tenants/',$ten->photo)}}">
                <p>{{ $ten->name }}</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                
        @endforeach       
              
      </div>
    </div>
  </div>





</div>


<!-- modal -->



@endsection
