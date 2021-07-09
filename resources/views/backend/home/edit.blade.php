@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    

<div class="row">
        <div class="col">

            <div class="card"> 
            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.home.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Home</h5>
                        
                    </div>
                    <div class="modal-body">  

                        <div class="form-group">
                            <label>Image ( dimensions = width: 540px * height: 540px ) </label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/home_page/',$home->image)}}" style="width: 25%;" alt="" >
                        </div>  
                        <br>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $home->order }}" required>
                        </div>                                               
                                             
                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $home->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

            </div>
        </div>

</div>
</div>

@endsection
