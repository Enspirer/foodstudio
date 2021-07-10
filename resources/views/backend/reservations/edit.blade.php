@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">    

            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.reservations.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                        
                    </div>
                    <div class="modal-body">  
                       
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $reservations->title }}" readonly required>
                        </div>  
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $reservations->name }}" readonly required>
                        </div> 
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" name="date" value="{{ $reservations->date }}" readonly required>
                        </div>                                          
                        
                        <div class="form-group">
                            <label>Time (24 Hours)</label>
                            <input type="text" class="form-control" name="time" value="{{ $reservations->time }}" readonly required>
                        </div> 
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="email" value="{{ $reservations->email }}" readonly required>
                        </div> 
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $reservations->phone }}" readonly required>
                        </div> 
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">        
                                <option value="Pending" {{ $reservations->status == 'Pending' ? "selected" : "" }}>Pending</option>   
                                <option value="Confirmed" {{ $reservations->status == 'Confirmed' ? "selected" : "" }}>Confirmed</option>  
                                <!-- <option value="Cancelled">Cancelled</option> -->
                            </select>                            
                        </div> 
                                               
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $reservations->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

          
        </div>

</div>
</div>
</div>

@endsection
