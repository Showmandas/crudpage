@extends('layout.file')





    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card mb-4 shadow">


            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand"> CRUD Page</a>

                </nav>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('crudpage.store') }}">
                    @csrf
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <span class="text-dark pl-2"> Name</span>
                            <input type="text" name="name" class="form-control mb-2" id="inlineFormInput" required >
                        </div>
                        <div class="col-auto">

                            <span class="text-dark pl-2">Email</span>
                            <input type="text" name="email" size="55" class="form-control mb-2" id="inlineFormInput" required >
                        </div>
                       
                        <div class="col-auto">

                            <span class="text-dark pl-2">Message</span>
                            <input type="text" name="message" size="55" class="form-control mb-2" id="inlineFormInput" required >
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>



        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand"> List</a>

                </nav>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                        <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
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
                            <th>Email</th>
                            <th>Message</th>
                            
                            <th>Action</th>

                        </tr>

                        </tfoot>
                        <tbody>

                        <?php $i = 1; ?>
                        @foreach ($crud as $cruds)
                            <?php $id = $cruds->id; ?>
                            <tr class="data-row">
                                <td class="iteration">{{$i++}}</td>
                                <td class="  word-break name">{{$cruds->name}}</td>
                                <td class=" word-break email">{{$cruds->email}}</td>
                                <td class=" word-break message">{{$cruds->message}}</td>





                                <td class="align-middle">
                                    <button type="button" class="btn btn-success" id="category-edit-item" data-item-id={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>


                                    <form method="POST" action="{{ route('crudpage.destroy',$cruds->id )}}" id="delete-form-{{ $cruds->id }}" style="display:none;">
                                        {{csrf_field() }}
                                        {{ method_field("delete") }}
                                    </form>




                                    <button onclick="if(confirm('are you sure to delete this')){
                                        document.getElementById('delete-form-{{ $cruds->id }}').submit();
                                        }
                                        else{
                                        event.preventDefault();
                                        }
                                        " class="btn btn-danger btn-sm btn-raised">
                                        <i class="fa fa-trash" aria-hidden="false">

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
    <div class="modal fade" id="category-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="edit-modal-label ">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="attachment-body-content">
                    <form id="category-edit-form" class="form-horizontal" method="POST" action="">
                    @csrf
                        @method('put')



                    <!-- id -->
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-id">Id </label>
                            <input type="text" name="id" class="form-control" id="modal-input-id" required readonly>
                        </div>
                        <!-- /id -->
                        <!-- name -->
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-name">Name</label>
                            <input type="text" name="name" class="form-control" id="modal-input-name" required autofocus>
                        </div>
                        <!-- /name -->
                        <!-- description -->
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-email">Email</label>
                            <input type="text" name="email" class="form-control" id="modal-input-email" required>
                        </div>
                           <!-- /description -->
                           
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-message">Message</label>
                            <input type="text" name="message" class="form-control" id="modal-input-message" required>
                        </div>
                        <div class="form-group">

                            <input type="submit" value="submit" class="form-control btn btn-success">
                        </div>
                     




                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- /Attachment Modal -->



