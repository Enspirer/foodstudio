@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">  

            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.tenants.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Cuisine</h5>                        
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $tenant->name }}" required>
                        </div> 

                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" class="form-control-file" name="image1">
                        </div> 
                        <img src="{{url('files/tenants/',$tenant->photo)}}" style="width: 20%" alt="">
                        <br><br>
                        <div class="form-group">
                            <label>Background Image</label>
                            <input type="file" class="form-control-file" name="image2">
                        </div> 
                        <br>
                        <img src="{{url('files/tenants/',$tenant->menu)}}" style="width: 30%" alt="">                                               
                        
                        <!-- <hr style="border-top: 3px solid #bbb; border-radius: 5px;">  -->

                        <br><br>
                        <div class="card">
                            <div class="card-header">
                                Pop-Up Section
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="5" required>{{ $tenant->description }}</textarea>
                                </div> 

                                <div class="form-group">
                                    <label>Pop-Up Image</label>
                                    <input type="file" class="form-control-file" name="popimage">
                                </div>       
                                <br>
                                <img src="{{url('files/tenants/',$tenant->pop_photo)}}" style="width: 30%" alt="">                  
                                <br><br><br>
                                <div class="form-group">
                                    <label>Upload Menu ( pdf )</label>
                                    <input type="file" class="form-control-file" name="upload">
                                    <br>
                                    {{$tenant->upload}}
                                </div>
                            </div>
                        </div>                         

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{$tenant->id}}"/>                        
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

            </div>
        </div>

</div>
</div>

@endsection
