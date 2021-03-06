@extends('frontend.layouts.app')

@section('title', 'Contact Food Studio | Colombo City Centre | One Galle Face | 0761 414 242')
@section('meta_description', 'For corporate inquiries, tenant requests and private events, get in touch with us on 0761 414 242
or email us on info@foodstudio.lk')

@section('content')



@if ( session()->has('message') )

<div class="container-fluid" style="background-color: black">  
    <div class="container-fluid jumbotron text-center mt-30">
      <h1 class="display-3 mt-20">Thank You!</h1><br>
      <p class="lead"><h3>We appreciate you contacting us. One of our member will get back in touch with you soon!<br><br> Have a great day!</h3></p>
    
      <hr>
      
      <p class="lead mb-20">
        <a class="btn btn-primary btn-md" href="{{url('contact-us')}}" role="button">Go Back to Contact Us Page</a>
      </p>
    </div>
  </div>

@else
  

<div class="page-banner whatson-container" style="background-image: url('img/contact-us.jpg') !important; background-position: top !important;">
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
        <form action="{{route('frontend.contactus.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        
          <div class="form-group ">
            <div class="row m-0">
              <div class="col-sm-6 mt-10">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
              </div>

              <div class="col-sm-6 mt-10">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row m-0">
              <div class="col-sm-6 mt-10">
                <input type="text" name="contact" class="form-control" placeholder="Contact" required>
              </div>

              <div class="col-sm-6 mt-10">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row m-0">
              <div class="col-sm-12 mt-10">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row m-0">
              <div class="col-sm-12 mt-10">
                <!-- <div class="g-recaptcha" data-sitekey="6LfNb4gbAAAAABOAb9uTAnQTFGvTMy4zLFCDLvLI"></div> -->
                <div id="html_element"></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row m-0">
              
              @if(session()->has('error'))
                  <div class="alert alert-danger">
                      {{ session()->get('error') }}
                  </div>
              @endif
                                      
            </div>
          </div>

          <input type="submit" class="btn btn-contact">
        </form>
      </div>
    </div>
    
     
  </div>

  <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LfNb4gbAAAAABOAb9uTAnQTFGvTMy4zLFCDLvLI'
        });
      };
    </script>
  
@endif

 



@endsection
