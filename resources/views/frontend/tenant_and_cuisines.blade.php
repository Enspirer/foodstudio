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

<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered " role="document">
   <img src="img/Popups_Food concept.png" style="width: 100%;">
  <a> <div style="    position: absolute;
    top: 25px;
    right: 28px;"><i id="close-btn" style="color:#fff;font-size:20px" class="fa fa-times"></i></div></a>
  </div>
</div> -->


<div class="modal fade" id="tenantpopuomodal" tabindex="-1" role="dialog" aria-labelledby="tenantsModalLabel" style="display: none;">  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
      </div>
      <div class="modal-body p-0">
        <div class="row flex-align-items-center" style="width: 100%;">
          <div class="container">
            <div class="row" style="display: flex;">
              <div class="col-sm-6">
                      <div class="image-content p-0" style="padding-top: 0 !important;">
                        <img style="width: 100%;" src="https://www.foodstudio.lk/img/OGF/China_Express/Tennakoon.png">
                      </div>
              </div>
              <div class="col-sm-6">
                <div class="discription-content text-center">
                  <h1 class="underline">China Express</h1>
                  <p class="mb-20">Appetising Chinese staples with spot-on flavours, China Express encompasses three stalls, each with its own flavour option. Xilan satisfies spicy local palates with that familiar Lankan Chinese kick, Mala Hot Pot serves a Sichuan specialty, and China Street serves Mao cuisine. China Express stays true to the bona fide tastes of Chinese cuisines, no matter what you crave.</p>

                  <a href="https://www.foodstudio.lk/img/OGF/China_Express/China Express menu-digital.pdf" type="button" download="" class="btn btn-menu">Download Our menu</a>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div></div>

  

<script>
  function opentenantpopuomodal(val) {
    // Prevent the # from being at the url
    event.preventDefault();
    openmodalpopup();

    if (val.length == 0) {
      document.getElementById("tenantpopuomodal").innerHTML = "";
      return;
    }
    else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("tenantpopuomodal").innerHTML = this.responseText;
          }
      };
      xmlhttp.open("GET", "https://www.foodstudio.lk/includes/get-tenant-details.php?q=" + val, true);
      xmlhttp.send();
    }
  }

  function openmodalpopup(){
    $('#tenantpopuomodal').modal('show');
  }
</script>



@endsection
