@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="page-banner whatson-container" style="background-image: url(https://www.foodstudio.lk/img/contact-us.jpg) !important; background-position: top !important;">
  <div class="row">
    <div class="container-fluid">
      <div class="banner-img-div " style="overflow: hidden;">
    </div>
  </div>
  </div>

  <div class="scroll-next-indicator">
    <div class="indicator-container">
      <div class="indicator-arrow top">
        <a href="#whatson">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
          <i class="fa fa-angle-down" aria-hidden="true"></i>
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
      </div>
      <div class="indicator-arrow bottom">
        <a href="#whatson">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
          <i class="fa fa-angle-down" aria-hidden="true"></i>
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container contact-container" id="contact">
  <div class="row">
    <div class="col-sm-6 description-panel mt-20 ml-0">
      <h1 class="underline">Get In <span class="yellow-text">Touch</span></h1>
      <p>Got a question about what we do? Have a suggestion? Feel free to get in touch with us through our official channels or through social media. We would love to hear from you!</p>
    </div>
  </div>


  <div class="row">

  <div class="col-sm-4">
    
      <h4 class="mt-20"><strong>Head Office</strong></h4>
      <p class="mt-20"><strong>Address</strong></p>
      <address>
      147 Kynsey Road,<br> Colombo 8.
      </address>

      <p class="mt-20"><strong>Email</strong></p>
      <p>info@foodstudio.lk</p>

      <p class="mt-20"><strong>Contact</strong></p>
      <p>0761 414 242</p>
    </div>



  @foreach($datas as $key => $data)
  
    <div class="col-sm-4">
    
      <h4 class="mt-20"><strong>{!!$data->name!!}</strong></h4>
      <p class="mt-20"><strong>Address</strong></p>
      <address>
      {!!$data->address!!}
      </address>

      <p class="mt-20"><strong>Email</strong></p>
      <p>{!!$data->email!!}</p>

      <p class="mt-20"><strong>Contact</strong></p>
      <p>{!!$data->contact_number!!}</p>
    </div>

    @endforeach  
   

  </div>


</div>

<div class="row contact-page-container m-0 mt-10">
    <div class="col-md-6 col-sm-6 col-xs-12">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.101478063854!2d79.8549729!3d6.9174374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fe163fb84b07bd7!2sFood%20Studio%20-%20Colombo%20City%20Centre!5e0!3m2!1sen!2slk!4v1610969969785!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    
    
        <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="contact-form-panel text-center">
        <h4 class="underline" style="margin-left:15px">Contact Us</h4>
        <form>
          <div class="form-group ">
            <div class="row m-0">
              <div class="col-sm-6 mt-10">
                <input type="text" name="" class="form-control" placeholder="Name">
              </div>

              <div class="col-sm-6 mt-10">
                <input type="email" name="" class="form-control" placeholder="Email">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row m-0">
              <div class="col-sm-6 mt-10">
                <input type="text" name="" class="form-control" placeholder="Contact">
              </div>

              <div class="col-sm-6 mt-10">
                <input type="text" name="" class="form-control" placeholder="Subject">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row m-0">
              <div class="col-sm-12 mt-10">
                <textarea class="form-control" placeholder="Message"></textarea>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-contact">
        </form>
      </div>
    </div>
    
    
    

  </div>

@endsection
