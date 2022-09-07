@extends('navigation')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">
        <div  id="content">
            <div  style=""  class="mt-4 text-right container">
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkinModal" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fa fa-plus" aria-hidden="true"></i> </a>
            </div>

            <div class="container">
                <h1 class="h3 mb-0 text-gray-800">Contestants</h1>

                <div>
                    <table id="contestants">
                        <tr>
                            <td>sdfsdf</td>
                            <td>sdfsfsd</td>
                            <td>sdfsfsd</td>
                        </tr>
                        <tr>
                            <td>dsfsfsdf</td>
                            <td>dsfsfsdf</td>
                            <td>dsfsfsdf</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>




{{--    ADD CONTESTANTS--}}

    <!-- add category Modal -->
    <div class="modal fade" id="checkinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title text-dark text-center" id="exampleModalLabel">Add Contestant <i class="fa fa-plus"></i> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--Form for taking categories--}}
                    <div style="" class="text-center ">
                        <p class="validation-message"></p>
                        <ul class="validation">  </ul>
                    </div>
                    <form class="add-cat" id="myform" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Contestant Name</label>
                                <input type="text" class="form-control" id="contestant_name" name="category_name" placeholder="Name">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix"> Contestant description</i>
                                <textarea id="category_description" class="md-textarea form-control"  name="contestant_description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="formFileSm" class="form-label">Upload Contestant image</label>
                                <input class="form-control form-control-sm" id="contestant_image" name="category_image" type="file">
                            </div>
                        </div>


                        <button type="submit" id="create-btn"  class="btn btn-dark add-cat-btn">Create

                        </button>
                        <div style="display: inline-block; padding-left: 10%" hidden="hidden" class="text-center spinner">
                            <div class="spinner-grow text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#contestants').DataTable();
        });
    </script>
@stop
