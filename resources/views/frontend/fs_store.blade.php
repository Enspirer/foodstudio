@extends('frontend.layouts.app')

@section('title', 'Order your Food Online from Food Studio | WhatsApp on 0761 414 242')

@section('meta_description', 'Your favourite food now delivered fast with Uber eats and Pickme Food. Variety of Specialties,
Delivered to you doorstep by Food studio, WhatsApp on 0761 414 242')




@section('content')

<div class="container-fluid order-container mt-20 mb-20" id="fsStore">
  <div class="row">
    <div class="container order-panel p-30" style="background:#fff">
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8 text-center">
          <ul class="list-inline icon-list mb-30">
            <li>
              <img src="img/icon-chef.png">
              <p>Fresh Foods</p>
            </li>
            <li>
              <img src="img/icon-dinner-plate.png">
              <p>Variety of Specialities</p>
            </li>
            <li>
              <img src="img/icon-cutllery.png">
              <p>Ready in Minutes</p>
            </li>
            <li>
              <img src="img/icon-delivery.png">
              <p>Fast Delivery</p>
            </li>
          </ul>
          <div>
                <h1 class="text-center" style="    margin: 100px auto;">Check out <span class="yellow-text"> Our Menu  </span></h1>
                <img src="img/FS_Menu.png" style="width:200px">
          </div>
           
          <div class="description-panel" style="width:100%">
            <h1 class="text-center underline" style="    margin: 100px auto;">Order <span class="yellow-text"> Now On </span></h1>
            <br>
              <div class="row m-0" style="    display: flex;">
                  <div class="col-3" style="width:25%;padding: 10px;"><img src="img/order/FS Delivery Partners_Eat Me.png" style="width:100%"></div>
               <div class="col-3" style="width:25%;padding: 10px;"><img src="img/order/logo.png" style="width:100%"></div>
                <div class="col-3" style="width:25%;padding: 10px;"><img src="img/order/pick.png" style="width:100%"></div>
                 <div class="col-3" style="width:25%;padding: 1px;"><img src="img/order/uber.png" style="width:100%"></div>
                 
                  </div>
                  
                  <br> <br>
                 <h3 style="    margin: auto;">Order through WhatsApp on 0761 414 242</h3>
            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type-->
            <!--  specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>-->
            <!--<div class="text-center">-->
            <!--  <a href="" class="btn btn-ordernow"> Order Now</a>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
