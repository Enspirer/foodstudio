@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">    

            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.events.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        
                    </div>
                    <div class="modal-body">  
                       
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $events->title }}" required>
                        </div>  
                        <div class="form-group">
                            <label>Title_HTML</label>
                            <input type="text" class="form-control" name="html" value="{{ $events->title_html }}" required>
                        </div> 
                        <div class="form-group">
                            <label>Description Title</label>
                            <input type="text" class="form-control" name="description_title" value="{{ $events->description_title }}" required>
                        </div>                                          
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4" required>{{ $events->description }}</textarea>
                        <br>
                        <div class="form-group">
                            <label>Image ( dimensions = width: 644px * height: 561px )</label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/events/',$events->image)}}" style="width: 20%;" alt="" >
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $events->order }}" required>
                        </div> 
                        <!-- <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="{{ $events->link }}" required>
                        </div>  -->
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">        
                                <option value="Enabled" {{ $events->status == 'Enabled' ? "selected" : "" }} >Enable</option>   
                                <option value="Disabled" {{ $events->status == 'Disabled' ? "selected" : "" }} >Disable</option>                                
                            </select>                            
                        </div> 
                                               
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $events->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

          
        </div>

</div>
</div>
</div>

@endsection
