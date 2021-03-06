@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">    


            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.social.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        
                    </div>
                    <div class="modal-body">  
                       
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $socimage->title }}" required>
                        </div>                                          
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4" required>{{ $socimage->description }}</textarea>
                        <br>
                        <div class="form-group">
                            <label>Image ( dimensions = width: 1610px * height: 2048px )</label>
                            <input type="file" class="form-control-file" name="image" >
                            <br>
                            <img src="{{url('files/social_responsible/',$socimage->image)}}" style="width: 20%;" alt="" >
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $socimage->order }}" required>
                        </div> 
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="type" value="{{ $socimage->type }}">
                        </div>  
                                               
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $socimage->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

          
        </div>

</div>
</div>
</div>

@endsection
