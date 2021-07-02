
  <div class="modal-dialog modal-lg" role="document">
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
                  <img style="width: 100%;" src="{{url('files/tenants/',$tenant->pop_photo)}}">
                </div>
                            </div>
              <div class="col-sm-6">
                <div class="discription-content text-center">
                  <h1 class="underline">{{ $tenant->name }}</h1>
                  <p class="mb-20">{{ $tenant->description }}</p>
</p>

                  <a href="{{url('files/pdf_upload/',$tenant->upload)}}" type="button" download class="btn btn-menu">Download Our menu</a>
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
  </div>