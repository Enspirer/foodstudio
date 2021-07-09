@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    

<div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>Corporate News&nbsp;</strong>

                    <div class="btn btn-primary pull-right ml-3" data-toggle="modal" data-target="#exampleModal">Add New</div>
                   
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <!-- <th scope="col">Description</th> -->
                                <!-- <th scope="col">Link</th> -->
                                <th scope="col">Order</th>
                                <th scope="col">Top News</th>
                                <th scope="col">Feature Story</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    <!-- Modal insert -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
         
                <form action="{{route('admin.corporatenews.store')}}" method="post" enctype="multipart/form-data">
                
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                        
                         
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>                                          
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4" required></textarea>
                        <br>
                        <div class="form-group">
                            <label>Image ( dimensions = width: 1000px * height: 869px ) </label>
                            <input type="file" class="form-control-file" name="image" required>
                        </div> 
                        <div class="form-group">
                            <label>Link</label>
                            <input type="url" class="form-control" name="link" required>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" required>
                        </div>

                        <div class="form-group">
                            <label>Top News</label>
                            <select class="form-control" name="topnews" required>
                                    <option value="0" >Disable</option>
                                    <option value="1" >Enable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Featured Story</label>
                            <select class="form-control" name="featuredstory" required>
                                    <option value="0" >Disable</option>
                                    <option value="1" >Enable</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Add New">
                    </div>
                </form>

            </div>
        </div>
    </div>

    
     <!-- Modal delete -->
     <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form name="importform" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalDeleteLabel">Delete</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h5>Are you sure you want to remove this Corporate News?</h5>
                        </div>                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" name="ok_button" id="ok_button">Delete</button>
                       
                    </div>
                </form>

            </div>
        </div>
    </div>
    

    <script type="text/javascript">
        $(function () {
            var table = $('#villadatatable').DataTable({
                processing: true,
                ajax: "{{route('admin.corporatenews.GetTableDetails')}}",
                serverSide: true,
                order: [[0, "desc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'image', name: 'image'},
                    {data: 'title', name: 'title'},
                    // {data: 'description', name: 'description'},
                    // {data: 'link', name: 'link'},
                    {data: 'order', name: 'order'},
                    {data: 'top_news', name: 'top_news'},
                    {data: 'feature_story', name: 'feature_story'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });


            var user_id;

            $(document).on('click', '.delete', function(){
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
            $.ajax({
            url:"corporatenews/delete/"+user_id,
            
            success:function(data)
            {
                setTimeout(function(){
                $('#confirmModal').modal('hide');
                $('#villadatatable').DataTable().ajax.reload();
                // alert('Email Deleted');
                });
            }
            })
            });

          
        });
    </script>



@endsection
