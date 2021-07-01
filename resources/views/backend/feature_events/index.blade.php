@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    

<div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>Feature Events&nbsp;</strong>

                    <div class="btn btn-primary pull-right ml-3" data-toggle="modal" data-target="#exampleModal">Add New</div>
                   
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Link</th>
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
         
                <form action="{{route('admin.feature.store')}}" method="post" enctype="multipart/form-data">
                
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
                        <textarea class="form-control" name="description"  rows="4" required></textarea>

                        <br>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" required>
                        </div>

                        <!-- <div class="form-group">
                            <label>Image (400px * 500px) </label>
                            <input type="file" class="form-control-file" name="image">
                        </div>   -->
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Add New">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <span id="form_result"></span>
                <form action="{{route('admin.feature.update')}}" method="post">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                                                                        
                        <label>Description</label>
                        <textarea class="form-control" name="description" id="description" rows="4" required></textarea>

                        <br>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" id="link" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="action_button" id="action_button" value="Update">
                    </div>
                </form>

            </div>
        </div>
    </div>


     <!-- Modal delete email-->
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
                            <h5>Are you sure you want to remove this Feature Event?</h5>
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
                ajax: "{{route('admin.feature.GetTableDetails')}}",
                serverSide: true,
                order: [[0, "desc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'description', name: 'description'},
                    {data: 'link', name: 'link'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });


            $(document).on('click', '.edit', function(){

            var user_id;

            var user_id = $(this).attr('id');
            $('#form_result').html('');
            $.ajax({
            url :"feature/edit/"+user_id,

            dataType:"json",
            success:function(data)
            {
                $('#title').val(data.result.title);
                $('#description').val(data.result.description);
                $('#link').val(data.result.link);
                $('#hidden_id').val(user_id);
                $('#editModal').modal('show');
            }
            })
            });

            var user_id;

            $(document).on('click', '.delete', function(){
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
            $.ajax({
            url:"feature/delete/"+user_id,
            
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
