@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">    


            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.tenantnews.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Tenant News</h5>
                        
                    </div>
                    <div class="modal-body">  
                       
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $tenantnews->title }}" required>
                        </div>                                          
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4" required>{{ $tenantnews->description }}</textarea>
                        <br>
                         
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="{{ $tenantnews->link }}" required>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $tenantnews->order }}" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Logo </label>
                            <input type="file" class="form-control-file" name="logo" >
                            <br>
                            <img src="{{url('files/tenant_news/',$tenantnews->logo)}}" style="width: 15%;" alt="" >
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Image (1000px * 869px) </label>
                            <input type="file" class="form-control-file" name="image" >
                            <br>
                            <img src="{{url('files/tenant_news/',$tenantnews->image)}}" style="width: 20%;" alt="" >
                        </div>                        
                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $tenantnews->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

          
        </div>

</div>
</div>
</div>

@endsection
