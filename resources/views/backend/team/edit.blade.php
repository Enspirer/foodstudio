@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    

<div class="modal-dialog" role="document">
            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.team.update_team')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Team</h5>
                        
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $team->name }}" >
                        </div>
                        <div class="form-group">
                            <label>Job Role</label>
                            <input type="text" class="form-control" name="role" value="{{ $team->job_role }}" >
                        </div>
                        
                        <div class="form-group">
                            <label>Job Group</label>

                            <select class="form-control" name="jobgroup">
        
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}" {{ $team->jobgroup_name == $group->id ? "selected" : "" }}> {{$group->jobgroup_name}} </option>
                                @endforeach
                                    
                            </select>
                            
                        </div>
                        
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4"> {{ $team->description }} </textarea>

                        <br>
                        <div class="form-group">
                            <label>Image (400px * 500px) </label>
                            <input type="file" class="form-control-file" name="image">
                            
                            <br>
                            <img src="{{url('files/profile/',$team->image)}}" style="width: 30%;" alt="" >
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $team->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

            </div>
        </div>



@endsection
