@extends('layout.file')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crudpage</title>
</head>
<body>
    <div class="container">
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-text text-light display-4 text-center">CRUD Page</a>
</nav>    </div>
     <div class="container container-fluid">
             <div class="card shadow">
             <div class="card-body p-2">
             <div class="jumbotron jumbotron-fluid">
             <form action="" id="crudform" class="p-2" method="POST">
             @csrf
             <div class="form-group">
             <label for="">Name:</label>
             <input type="text" name="name" placeholder="Enter Your Name.." class="form-control">
             </div>

             <div class="form-group">
             <label for="">Email:</label>
             <input type="email" name="email" placeholder="Enter Your Email.." class="form-control">
             </div>

             <div class="form-group">
             <label for="">Message:</label>
<textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>            
 </div>

             <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
             </div>
             </form>
             </div>
             </div>
             </div>
     </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3 bg-abasas-dark">
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                        <thead class="bg-abasas-dark">


                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tfoot class="bg-abasas-dark">
                        <tr>

                            <th>#</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Message</th>
                                                        <th>Action</th>

                        </tr>

                        </tfoot>
                        <tbody>
                        @foreach ($crud as $cruds)
                            <?php $id = $cruds->id; ?>
                            <tr>
                                <td class="name">{{$cruds->name}}</td>
                                <td class="email">{{$cruds->email}}</td>
                                <td class="message">{{$cruds->message}}</td>





                                <td class="align-middle">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#category-edit-modal" data-item-id={{$id}}> <i class="fa fa-edit"> </i></button>


                                    <form method="POST" id="delete-form-{{ $cruds->id }}" style="display:none;">
                                        {{csrf_field() }}
                                        {{ method_field("delete") }}
                                    </form>


<button onclick="if(confirm('are you sure to delete this')){
                                        document.getElementById('delete-form-{{ $cruds->id }}').submit();
                                        }
                                        else{
                                        event.preventDefault();
                                        }
                                        " class="btn btn-danger">
                                        <i class="fa fa-trash">

                                        </i>
                                    </button>



                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <!-- Attachment Modal -->
    <div class="modal fade" id="category-edit-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="attachment-body-content">
                    <form id="category-edit-form" class="form-horizontal" method="POST" action="">
                    @csrf
                    @method('put')



                        <!-- name -->
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-name">Name</label>
                            <input type="text" name="name" value="{{old('name',$cruds->name)}}" class="form-control" id="modal-input-name" required autofocus>
                        </div>
                        <!-- /name -->
                        <!-- description -->
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email',$cruds->email)}}" id="modal-input-email" required>
                        </div>
                           <!-- /description -->
                           <div class="form-group">
                            <label class="col-form-label" for="modal-input-message">Message</label>
                            <input type="text" name="message" class="form-control" value="{{old('message',$cruds->message)}}" id="modal-input-message" required>
                        </div>
                        <div class="form-group">

                            <input type="submit" value="Submit" class="form-control btn btn-success">
                        </div>
                     




                    </form>
                </div>

            </div>
        </div>
    </div>



    <script>
    $(document).ready(function(){
        $('#crudform').submit(function(event){
            event.preventDefault();
         var data= $(this).serialize();
         var url= "{{url('crudpage')}}"
         $.ajax({
             url:url,
             method:'POST',
             data:data,
             success:function(response){
                if(response.success){
                    alert(response.message);
                }
             },
             error:function(error){
                console.log(error);
             }
         })
        });
    });
    </script>

<script>
    $(document).ready(function(){
        $('#category-edit-form').submit(function(event){
            event.preventDefault();
         var data= $(this).serialize();
         var url= "{{url('crudpage')}}"
         $.ajax({
             url:url,
             method:'POST',
             data:data,
             success:function(response){
                if(response.success){
                    alert(response.message);
                }
             },
             error:function(error){
                console.log(error);
             }
         })
        });
    });
    </script>

</body>
</html>