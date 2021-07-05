@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<div class="page-banner">
  <div class="row">
    <div class="container-fluid">
      <div class="banner-img-div" style="overflow: hidden;">
        <img src="https://www.foodstudio.lk/img/about_us.png" width="100%">
      </div>
    </div>
  </div>
  <div class="scroll-next-indicator">
    <div class="indicator-container">
      <div class="indicator-arrow top">
        <a href="#carrers">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
          <i class="fa fa-angle-down" aria-hidden="true"></i>
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
      </div>
      <div class="indicator-arrow bottom">
        <a href="#carrers ">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
          <i class="fa fa-angle-down" aria-hidden="true"></i>
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container careers-container" id="carrers">
  <div class="row m-0 mt-20">
    <div class="col-sm-12 col-md-12">
      <div class="description-panel" style="width: 100%;">
        <h1 class="underline">Join Our <span class="yellow-text">Team</span></h1>
        <p>We are always open to hear from people passionate about bringing up-and-coming brands to the fore! If you consider yourself an expert on food, that’s a bonus. Apply to any of the vacancies listed below to begin your venture into Sri Lanka’s growing food experience industry.</p>
      </div>


      <div id="" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <a href="#" class="btn btn-learn-more pull-right" style="background-color: #DCDCDC" onclick="opentenantpopuomodalone()">Send your CV</a>
            </div>
          </div>


      <h3>Current Vacancies</h3><br>


      @foreach($jobs as $key => $job)

      <div class="panel-group careers-panel" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default aos-init" data-aos="fade-up" data-aos-delay="0">
          <div class="panel-heading dw-item" role="tab" id="headingOne" style="background: #dab627; opacity: 0.6;">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <div class="row ">
                <div class="col-sm-12">
                  <h5> {!!$job->title!!}
                    <span class=" arrow-down fa fa-sort-up"></span>
                  </h5>
                </div>
              </div>
            </a>
          </div>

          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <p> {!!$job->description!!} </p>
              <a href="#" class="btn btn-learn-more pull-right" data-toggle="modal" data-target="#exampleModal{{$job->id}}">Apply Now</a>
            </div>
          </div>
        </div>
      </div>

      @endforeach 

      
    </div>
    <!-- <div class="col-sm-12 col-md-4">
      
      <div class="contact-form-panel text-center">
        <h4 class="underline" style="margin-left: 15px;">Apply Now</h4>
        <form method="post" id="career_apply" enctype="multipart/form-data" class="mb-20">
          <div class="form-group">
            
            <div class="row m-0">
              <div class="col-sm-12 mt-10">
                <input type="text" name="cname" class="form-control" placeholder="Name" required="">
              </div>
            </div>
            <div class="row m-0">
              <div class="col-sm-12 mt-10">
                <input type="email" name="cemail" class="form-control" placeholder="Email" required="">
              </div>
            </div>
          
        
            <div class="row m-0">
              <div class="col-sm-12 mt-10">
                <input type="text" name="cnumber" class="form-control" placeholder="Contact" required="">
              </div>
              
               <div class="col-sm-12 mt-10">
                <input type="text" name="position" class="form-control" placeholder="Position Interested" required="">
              </div>              
            </div>

            <div class="form-group">
              <div class="row m-0">

                <div class="col-sm-12 mt-10">
                  <div class="form-control cvupload-div">
                    <span class="pull-left">CV Upload</span>
                    <span class="pull-right"><i class="fa fa-upload"></i></span>
                  </div>
                  <input type="file" name="cv_upload" id="cv_upload" class="form-control" accept="application/msword,application/pdf" onchange="return validate_fileupload(this.value);" required="">
                </div>
              </div>
            </div>
    
            <div class="row m-0">
              <div class="col-sm-12 mt-10">
                <textarea class="form-control" name="cmsg" placeholder="Message"></textarea>
              </div>
            </div>
          </div>
          <input type="submit" name="submit" class="btn btn-contact" value="Apply">
        </form>
      </div>


    </div> -->
  </div>
</div>

@foreach($jobs as $key => $job)

<div class="modal fade" id="exampleModal{{$job->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="contact-form-panel text-center">

        <form action="{{route('frontend.opportunityjob.storejob')}}" method="post" enctype="multipart/form-data" class="mb-20">
          {{csrf_field()}}
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{$job->title}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">  
                <div class="form-group">
                  
                  <div class="row m-0">
                    <div class="col-sm-12 mt-10">
                      <input type="text" name="oname" class="form-control" placeholder="Name" required="">
                    </div>
                  </div>
                  <div class="row m-0">
                    <div class="col-sm-12 mt-10">
                      <input type="text" name="oemail" class="form-control" placeholder="Email" required="">
                    </div>
                  </div>
                
              
                  <div class="row m-0">
                    <div class="col-sm-12 mt-10">
                      <input type="text" name="ocontact" class="form-control" placeholder="Contact" required="">
                    </div>
                    
                    <div class="col-sm-12 mt-10">
                      <input type="text" name="oposition" class="form-control" value="{{$job->title}}" readonly required="">
                    </div>              
                  </div>

                  <div class="form-group">
                    <div class="row m-0">

                      <div class="col-sm-12 mt-10">
                        <div class="form-control cvupload-div">
                          <span class="pull-left">CV Upload</span>
                          <!-- <input type="file" class="form-control-file" name="image" required> -->
                          <span class="pull-right"><i class="fa fa-upload"></i></span>
                          <!-- <input type="file" class="form-control-file" name="image" required> -->
                        </div>
                        <!-- <input type="file" class="form-control-file" name="image" required> -->
                        <input type="file" name="cv_upload" id="cv_upload" class="form-control" accept="application/msword,application/pdf" onchange="return validate_fileupload(this.value);" required="">
                      </div>
                    </div>
                  </div>
          
                  <div class="row m-0">
                    <div class="col-sm-12 mt-10">
                      <textarea class="form-control" name="omsg" placeholder="Message"></textarea>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-learn-more" data-dismiss="modal">Close</button> -->
              <!-- <input type="submit" name="submit" class="btn btn-contact" value="Apply"> -->
              <button type="submit" class="btn btn-careers-apply">Apply Now</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>

@endforeach

<!-------------------------------------------------- model genearl start---------------------------------->


<div class="modal fade" id="exampleModalone" tabindex="-1" role="dialog" aria-labelledby="exampleModalOneLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="contact-form-panel text-center">

        <form action="{{route('frontend.generaljob.store')}}" method="post" id="career_apply" enctype="multipart/form-data" class="mb-20">
          {{csrf_field()}}
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalOneLabel">General</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">  
                <div class="form-group">
                  
                  <div class="row m-0">
                    <div class="col-sm-12 mt-10">
                      <input type="text" name="gname" class="form-control" placeholder="Name" required="">
                    </div>
                  </div>
                  <div class="row m-0">
                    <div class="col-sm-12 mt-10">
                      <input type="text" name="gemail" class="form-control" placeholder="Email" required="">
                    </div>
                  </div>       
                  <div class="row m-0">
                    <div class="col-sm-12 mt-10">
                      <input type="text" name="gcontact" class="form-control" placeholder="Contact" required="">
                    </div>
                    
                    <div class="col-sm-12 mt-10">
                      <input type="text" name="gposition" class="form-control" value="General" placeholder="General" readonly required="">
                    </div>              
                  </div>

                  <div class="form-group">
                    <div class="row m-0">

                      <div class="col-sm-12 mt-10">
                        <div class="form-control cvupload-div">
                          <span class="pull-left">CV Upload</span>
                          <!-- <input type="file" class="form-control-file" name="image" required> -->
                          <span class="pull-right"><i class="fa fa-upload"></i></span>
                          <!-- <input type="file" class="form-control-file" name="image" required> -->
                        </div>
                        <!-- <input type="file" class="form-control-file" name="image" required> -->
                        <input type="file" name="cv_upload" id="cv_upload" class="form-control" accept="application/msword,application/pdf" onchange="return validate_fileupload(this.value);" required="">
                      </div>
                    </div>
                  </div>
          
                  <div class="row m-0">
                    <div class="col-sm-12 mt-10">
                      <textarea class="form-control" name="gmsg" placeholder="Message" required></textarea>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-learn-more" data-dismiss="modal">Close</button> -->
              <!-- <input type="submit" name="submit" class="btn btn-contact" value="Apply"> -->
              <button type="submit" class="btn btn-careers-apply">Apply Now</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-------------------------------------------------- model general end---------------------------------->






<script>
  function opentenantpopuomodal(val) {
    // Prevent the # from being at the url
    event.preventDefault();
    openmodalpopup();
  }

  function openmodalpopup(){
    $('#exampleModal').modal('show');
  }





  function opentenantpopuomodalone(val) {
    // Prevent the # from being at the url
    event.preventDefault();
    openmodalpopupone();
  }

  function openmodalpopupone(){
    $('#exampleModalone').modal('show');
  }
</script>

@endsection
