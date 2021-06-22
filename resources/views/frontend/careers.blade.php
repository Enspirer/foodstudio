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
    <div class="col-sm-12 col-md-8">
      <div class="description-panel" style="width: 100%;">
        <h1 class="underline">Join Our <span class="yellow-text">Team</span></h1>
        <p>We are always open to hear from people passionate about bringing up-and-coming brands to the fore! If you consider yourself an expert on food, that’s a bonus. Apply to any of the vacancies listed below to begin your venture into Sri Lanka’s growing food experience industry.</p>
      </div>
      <div class="panel-group careers-panel" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default aos-init" data-aos="fade-up" data-aos-delay="0">
          <div class="panel-heading dw-item" role="tab" id="headingOne" style="background: #dab627; opacity: 0.6;">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <div class="row ">
                <div class="col-sm-12">
                  <h5> Operations Executive
                    <span class=" arrow-down fa fa-sort-up"></span>
                  </h5>
                </div>
              </div>
            </a>
          </div>

          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <p>The operations executive is an important job in organizations that have complex processes in order. Not every business model requires an operations executive but the ones that have operations intensive processes stand to benefit from an executive ensuring everything is running smoothly.</p>
              <a href="#" class="btn btn-learn-more pull-right" onclick="opentenantpopuomodal(1)">Apply Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="panel-group jobs-panel" id="accordion" role="tablist" aria-multiselectable="false">
        <div class="panel panel-default" data-aos="fade-up" data-aos-delay="0">
          <div class="panel-heading dw-item" role="tab" id="headingtwo">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
              <div class="row ">
                <div class="col-sm-12">
                  <h5> Lorem Ipsum is simply dummy text
                    <span class=" arrow-down fa fa-sort-up"></span>
                  </h5>
                </div>
              </div>
            </a>
          </div>

          <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo">
            <div class="panel-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              
              <a href="https://www.foodstudio.lk/careers-inner" class="btn btn-learn-more pull-right">Apply Now</a>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="panel-group jobs-panel" id="accordion" role="tablist" aria-multiselectable="false">
        <div class="panel panel-default" data-aos="fade-up" data-aos-delay="0">
          <div class="panel-heading dw-item" role="tab" id="headingthree">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
              <div class="row ">
                <div class="col-sm-12">
                  <h5> Lorem Ipsum is simply dummy text
                    <span class=" arrow-down fa fa-sort-up"></span>
                  </h5>
                </div>
              </div>
            </a>
          </div>
          <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
            <div class="panel-body">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <a href="https://www.foodstudio.lk/careers-inner" class="btn btn-learn-more pull-right">Apply Now</a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <div class="col-sm-12 col-md-4">
      
      <div class="contact-form-panel text-center">
        <h4 class="underline" style="margin-left: 15px;">Apply Now</h4>
        <form method="post" id="career_apply" enctype="multipart/form-data" class="mb-20">
          <div class="form-group">
            <!-- <div class="row m-0">
              <div class="col-sm-12 mt-10">
                <select name="designation" class="form-control" required="">
                  <option value="">Designation</option>
                  <option value="1">Operations Executive</option>
                </select>
              </div>
            </div> -->
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

              <div class="col-sm-12 mt-10">
                <div class="form-control cvupload-div">
                  <span class="pull-left">CV Upload</span>
                  <span class="pull-right"><i class="fa fa-upload"></i></span>
                </div>
                <input type="file" name="cv_upload" id="cv_upload" class="form-control" accept="application/msword,application/pdf" onchange="return validate_fileupload(this.value);" required="">
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


    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Operations Executive</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="contact-form-panel text-center">
          <form method="post" id="career_apply" enctype="multipart/form-data" class="mb-20">
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
          </form>
        </div>

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-learn-more" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-careers-apply">Apply Now</button>
      </div>
    </div>
  </div>
</div>

<script>
  function opentenantpopuomodal(val) {
    // Prevent the # from being at the url
    event.preventDefault();
    openmodalpopup();
  }

  function openmodalpopup(){
    $('#exampleModal').modal('show');
  }
</script>

@endsection
