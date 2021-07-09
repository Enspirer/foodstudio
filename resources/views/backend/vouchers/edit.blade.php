@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    

<div class="row">
        <div class="col">

            <div class="card"> 
            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.voucher.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
                        
                    </div>
                    <div class="modal-body">  

                        <div class="form-group">
                            <label>Image ( dimensions = width: 400px * height: 364px ) </label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/vouchers/',$voucher->image)}}" style="width: 30%;" alt="" >
                        </div>  
                        <br>                                                
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4" required>{{ $voucher->description }}</textarea>
                        <br>                       
                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $voucher->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

            </div>
        </div>

</div>
</div>

@endsection
