@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">    


            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.corporatenews.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Corporate News</h5>
                        
                    </div>
                    <div class="modal-body">  
                       
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $corporatenews->title }}" required>
                        </div>                                          
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4" required>{{ $corporatenews->description }}</textarea>
                        <br>
                        <div class="form-group">
                            <label>Image ( dimensions = width: 1000px * height: 869px ) </label>
                            <input type="file" class="form-control-file" name="image" >
                            <br>
                            <img src="{{url('files/corporate_news/',$corporatenews->image)}}" style="width: 20%;" alt="" >
                        </div> 
                        <div class="form-group">
                            <label>Link</label>
                            <input type="url" class="form-control" name="link" value="{{ $corporatenews->link }}" required>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $corporatenews->order }}" required>
                        </div>

                        <div class="form-group">
                            <label>Top News</label>
                            <select class="form-control" name="topnews"  required>                            
                                    <option value="0" {{ $corporatenews->top_news == 0 ? "selected" : "" }} >Disable</option>
                                    <option value="1" {{ $corporatenews->top_news == 1 ? "selected" : "" }} >Enable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Featured Story</label>
                            <select class="form-control" name="featuredstory" required>
                                    <option value="0" {{ $corporatenews->feature_story == 0 ? "selected" : "" }} >Disable</option>
                                    <option value="1" {{ $corporatenews->feature_story == 1 ? "selected" : "" }} >Enable</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $corporatenews->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

          
        </div>

</div>
</div>
</div>

@endsection
