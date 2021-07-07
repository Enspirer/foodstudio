@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">   

            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.careers.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Job Opportunity</h5>
                        
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $jobs->title }}" required>
                        </div>
                        
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4" required> {{ $jobs->description }} </textarea>
                        <br>

                        <div class="form-group">
                            <label>order</label>
                            <input type="text" class="form-control" name="order" value="{{ $jobs->order }}" required>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>        
                                <option value="Enabled" {{ $jobs->status == 'Enabled' ? "selected" : "" }} >Enable</option>   
                                <option value="Disabled" {{ $jobs->status == 'Disabled' ? "selected" : "" }} >Disable</option>                                
                            </select>                            
                        </div>                     
                                                
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $jobs->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
