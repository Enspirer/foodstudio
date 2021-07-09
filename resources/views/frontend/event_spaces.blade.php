@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')


@if ( session()->has('message') )

<div class="container-fluid" style="background-color: black">  
    <div class="container-fluid jumbotron text-center mt-30">
      <h1 class="display-3 mt-20">Thank You!</h1><br>
      <p class="lead"><h3>We appreciate you booking us. One of our member will get back in touch with you soon!<br><br> Have a great day!</h3></p>
    
      <hr>
      
      <p class="lead mb-20">
        <a class="btn btn-primary btn-md" href="{{url('event-spaces')}}" role="button">Go Back to Event Spaces Page</a>
      </p>
    </div>
  </div>

@else



<div class="container-fluid corporate-container mt-20 mb-20" id="events">
  <div class="row">
    <div class="container corporate-panel p-30" style="padding-left:0px;padding-right:0px">


    

    @foreach($events as $key => $event )

    <!-- <div class="row flex-align-items-center"> -->
        <div class="col-sm-6 mt-20 news-main-box">
          <a href="">
            <div class="news-image-box">
              <img src="{{url('files/events/',$event->image)}}" width="100%">
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
    font-weight: 700;"><u>{!!$event->title_html!!}</u></span></h1>
                  
              </div>
            <div class="news-details-box">
              <h2> {!!$event->description_title!!} </h2>
              <p>{!!$event->description!!}</p>
            </div>
          </a>
        </div>

        <!-- </div> -->

        @endforeach                  
        
     

      
      
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
            <form action="{{route('frontend.reservation.store')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group ">
                <div class="row m-0">
                  <div class="col-sm-6 mt-10 ">
                    <input type="date" name="date" class="form-control" placeholder="Date" required>
                  </div>

                  <div class="col-sm-6 mt-10">
                    <input type="time" name="time" class="form-control" placeholder="Time" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-sm-6 mt-10">
                    <input type="text" name="title" class="form-control" placeholder="Title" required>
                  </div>

                  <div class="col-sm-6 mt-10">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-sm-12 mt-10">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-sm-12 mt-10">
                    <input type="text" name="phone" class="form-control" placeholder="Phone" required>
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


@endif

@endsection
