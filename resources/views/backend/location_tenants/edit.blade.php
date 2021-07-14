@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">  

            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.tenant.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Branch</h5>                        
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $branch->name }}" required>
                        </div>                                             
                                                
                        <label>Address</label>
                        <textarea class="form-control" name="address"  rows="4" required>{{ $branch->address }}</textarea>
                        <br>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $branch->email }}" required>
                        </div> 
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" name="number" value="{{ $branch->contact_number }}" required>
                        </div> 
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $branch->order }}" required>
                        </div> 
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description"  rows="2" required>{{ $branch->description }}</textarea>
                        </div> 
                        <!-- <div class="form-group">
                            <label>Json Data</label>
                            <input type="text" class="form-control" name="json" required>
                        </div>  -->

                        <div class="form-group">
                            <label>Logo ( width = 55px ) </label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/branch_logo/',$branch->logo)}}" style="width: 15%;"  alt="" >
                        </div>  <br>
                        <div class="form-group">
                            <label>Image ( dimensions = width: 1280px * height: 800px )</label>
                            <input type="file" class="form-control-file" name="background_image">
                            <br>
                            <img src="{{url('files/branch_logo/',$branch->image)}}" style="width: 30%;"  alt="" >
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $branch->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

            </div>
        </div>

</div>
</div>

@endsection
