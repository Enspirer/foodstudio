@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="container-fluid corporate-container mt-20 mb-20" id="events">
  <div class="row">
    <div class="container corporate-panel p-30" style="padding-left:0px;padding-right:0px">
      <div class="row flex-align-items-center">
        <div class="col-sm-6 mt-20 news-main-box">
          <a href="">
              
            <div class="news-image-box">
              <img src="https://www.foodstudio.lk/img/room_01.png" width="100%">
            </div>
            <div class="news-details-box-top" style="    background: linear-gradient(
180deg
, rgba(0,0,0,1) 0%, rgba(108,0,52,0) 100%);
    width: 95%;
    height: 25%;
    position: absolute;
    padding: 0 15px;
    top: 0;">
                <h1 class="underline" style="    font-family: 'Montserrat', sans-serif;color: #fff !important;
    font-weight: 700;"><u>VIP <span class="yellow-text"> Room 1 </span></u></h1>
                  
              </div>
            <div class="news-details-box">
              <h2>Meet, Greet &amp; Eat!</h2>
              <p>Make your meeting or meet-up a private affair by booking a VIP room at Food Studio. Book in advance to pre-arrange ambiance or décor options with our team, along with a menu of premium food choices</p>
            </div>
          </a>
        </div>

        <div class="col-sm-6 mt-20 news-main-box">
          <a href="">
            <div class="news-image-box">
              <img src="https://www.foodstudio.lk/img/room_02.png" width="100%">
            </div>
                        <div class="news-details-box-top" style="    background: linear-gradient(
180deg
, rgba(0,0,0,1) 0%, rgba(108,0,52,0) 100%);
    width: 95%;
    height: 25%;
    position: absolute;
    padding: 0 15px;
    top: 0;">
                <h1 style="    font-family: 'Montserrat', sans-serif;color: #fff !important;
    font-weight: 700;"><u>VIP <span class="yellow-text"> Room 2</span></u></h1>
                  
              </div>
            <div class="news-details-box">
              <h2>Private Events with Good Taste</h2>
              <p>Host your gathering at a Food Studio VIP room and be sure of expert décor and catering. Call us now to find out more about our seating options and organise a menu for the occasion.</p>
            </div>
          </a>
        </div>
      </div>

      <div class="row flex-align-items-center">
        <div class="col-sm-6 mt-20 news-main-box">
          <a href="">
            <div class="news-image-box">
              <img src="https://www.foodstudio.lk/img/room_03.png" width="100%">
            </div>
                        <div class="news-details-box-top" style="    background: linear-gradient(
180deg
, rgba(0,0,0,1) 0%, rgba(108,0,52,0) 100%);
    width: 95%;
    height: 25%;
    position: absolute;
    padding: 0 15px;
    top: 0;">
                <h1 style="    font-family: 'Montserrat', sans-serif;color: #fff !important;
    font-weight: 700;"><u>Mezzanine <span class="yellow-text"> Floor</span></u></h1>
                  
              </div>
            <div class="news-details-box">
              <h2>Events Served on Another Level</h2>
              <p>Move things up a notch and meet and mingle on the Mezzanine Floor – a venue ideal for events with 125 guests. Book the date with us and we’ll show you how to make the most of the space.</p>
            </div>
          </a>
        </div>

        <div class="col-sm-6 mt-20 news-main-box">
          <a href="">
            <div class="news-image-box">
              <img src="https://www.foodstudio.lk/img/room_04.png" width="100%">
            </div>
                        <div class="news-details-box-top" style="    background: linear-gradient(
180deg
, rgba(0,0,0,1) 0%, rgba(108,0,52,0) 100%);
    width: 95%;
    height: 25%;
    position: absolute;
    padding: 0 15px;
    top: 0;">
                <h1 style="    font-family: 'Montserrat', sans-serif;color: #fff !important;
    font-weight: 700;"><u>The <span class="yellow-text"> Terrace</span></u></h1>
                  
              </div>
            <div class="news-details-box">
              <h2>Savour the Spectacular View</h2>
              <p>The view from our terrace showcases the cityscape that makes Colombo so rich with culture. Sweep invitees off their feet outside in the fresh air, and create a lasting impression.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container booking-panel p-30">
      <div class="row m-0 flex-align-items-center">
        <div class="col-sm-6 p-0">
          <div class="description-panel" style="text-align:left !important;">
            <h1>Choose the best <br>Location for Your Event</h1>
            <p class="mt-20">Choose the best location for your event with Food Studio’s VIP Rooms, Mezzanine Floor and Terrace</p>

            <h2>Call us on : 0761 414 242</h2>
          </div>
        </div>
        <div class="col-sm-6 p-0 booking-form-div">
          <div class="booking-form-panel">
            <h4 class="underline" style="text-decoration: underline;">Make Your Reservation</h4>
            <form>
              <div class="form-group ">
                <div class="row m-0">
                  <div class="col-sm-6 mt-10 ">
                    <input type="date" name="" class="form-control" placeholder="Date">
                  </div>

                  <div class="col-sm-6 mt-10">
                    <input type="text" name="" class="form-control" placeholder="Time">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-sm-6 mt-10">
                    <input type="text" name="" class="form-control" placeholder="Title">
                  </div>

                  <div class="col-sm-6 mt-10">
                    <input type="text" name="" class="form-control" placeholder="Name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-sm-12 mt-10">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-sm-12 mt-10">
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-sm-12 mt-10">
                    <input type="submit" class="btn btn-booking" value="Book Now">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
