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
  	  	<li class="tenant-tab active">
  		<a style="border: 1px solid;
    border-radius: 8px;display: flex;" href="https://www.foodstudio.lk/tenant-and-cuisines?store_id=1" aria-expanded="false">
  			<img src="https://www.foodstudio.lk/img/ccclogo.png" style="margin: auto;">
      </a>
    </li>
  	  	<li class="tenant-tab ">
  		<a style="border: 1px solid;
    border-radius: 8px;display: flex;" href="https://www.foodstudio.lk/tenant-and-cuisines?store_id=2" aria-expanded="false">
  			<img src="https://www.foodstudio.lk/img/ofglogo.png" style="margin: auto;">
      </a>
    </li>
  	  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content menu-main-panel">
  	<div class="tab-pane active" id="1">
  		<div class="row m-0">
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/OGF/China_Express/Hot_butter_cuttlefish.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(9)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/OGF/China_Express/China_Express_100.jpg">
                <p>China Express</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Fresh_Intentions_Roots/Fresh_Juice2.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(6)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Fresh_Intentions_Roots/Fresh_Intentions_Roots_100.jpg">
                <p>Fresh Intentions by Roots</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Okra/Flavoured_Hoppers.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(8)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Okra/Okra_100.jpg">
                <p>Okra</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Shiok/Singapore_Chicken_Rice.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(2)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Shiok/Shiok_100.jpg">
                <p>Shiok!</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/OGF/Suksamran_Thai/Beef_Set_menu.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(10)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/OGF/Suksamran_Thai/Suksamran_Thai_100.jpg">
                <p>Suksamran Thai</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Sumatran_Spice/Nasi_goreng.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(3)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Sumatran_Spice/Sumatran_Spice_100.jpg">
                <p>Sumatran Spice</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Tokyo_Shokudo/Chicken_Katsudon.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(7)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Tokyo_Shokudo/Tokyo_Shokudo_100.jpg">
                <p>Tokyo Shokudo</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/The_Sizzle/beef_tenderloin steak.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(16)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/The_Sizzle/sizzle_logo-white-bg.png">
                <p>The Sizzle</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Mughlabar/871d5aac-76be-4646-8a00-242b4e07c277.jpeg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(17)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Mughlabar/Mughlabar logo.png">
                <p>Mughlabar</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Smoking Hearts/download (1).jfif'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(18)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Smoking Hearts/Smoking Hearts-logo-01.jpg">
                <p>Smoking Hearts</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Punch Island Bar/Cocktails 1.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(19)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Punch Island Bar/Punch-100.jpg">
                <p>Punch Island Bar</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Little Prince by Mitsi/Little Price coffee &amp; cake shot.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(20)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Little Prince by Mitsi/The Little Prince-100.jpg">
                <p>Little Prince by Mitsi</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
                <div class="col-sm-3">
          <div class="menue-type-box ccc" style="background-image: url('https://www.foodstudio.lk/img/CCC/Isle of Gelato/Gelato 1 (1).jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="#" onclick="opentenantpopuomodal(21)">
              <div class="name-logo-container">
                <img src="https://www.foodstudio.lk/img/CCC/Isle of Gelato/Isle of Gelato-100 (1).jpg">
                <p>Isle of Gelato</p>
                <h6>View More &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></h6>
              </div>
            </a>
          </div>
        </div>
            	</div>
    </div>
  </div>
</div>


<!-- modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered " role="document">
   <img src="img/Popups_Food concept.png" style="width: 100%;">
  <a> <div style="    position: absolute;
    top: 25px;
    right: 28px;"><i id="close-btn" style="color:#fff;font-size:20px" class="fa fa-times"></i></div></a>
  </div>
</div>

<div class="modal fade" id="tenantpopuomodal" tabindex="-1" role="dialog" aria-labelledby="tenantsModalLabel">
  <!-- Contents from ajax -->
</div>

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
