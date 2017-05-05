@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">
                    @foreach ($errors->all() as $error)
                        {{  $error }}
                    @endforeach
                    <div class="media-body">
                        <h2 class="media-heading text-success"> All Courses </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <form class="" action="" method="post">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search_course" placeholder="Search Course.....">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="text-right">
                        <a href="{{ route('courses.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Add Course </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <th> CODE </th>
                    <th> Name </th>
                    <th> Credit </th>

                </thead>
                @foreach ($courses as $course)
                    <tbody>
                        <tr>
                            <td> {{ $course->code }}</td>
                            <td> {{ $course->name }}</td>
                            <td> {{ $course->credit }}</td>

                            <td> <button type="button" class="btn btn-primary btn-sm view_data" id="{{ $course->code }}"> <i class="fa fa-eye fa-lg"></i> </button> </td>

                            <td> <button type="button" class="btn btn-success btn-sm edit_data"  id="{{ $course->code }}">
                                <i class="fa fa-edit fa-lg"></i>
                            </button></td>

                            <td> <button type="button" class="btn btn-danger btn-sm confirm-delete"> <i class="fa fa-trash fa-lg" id="{{ $course->code }}"></i> </button> </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

    <div id="dataViewModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Course Details</h4>
                </div>
                <div class="modal-body" id="course_details">
                    <div class="row">
                        <div class="row">
                            <div class=" col-md-8 col-lg-8 ">
                              <table class="table table-user-information">
                                <tbody>

                                  <tr>
                                      <td>CODE</td>
                                      <td><input type="text" name="code" value="" class="disabled"></td>
                                  </tr>

                                  <tr>
                                    <td>NAME</td>
                                    <td><input type="text" name="name" value="" class="disabled"></td>
                                  </tr>
                                  <tr>
                                    <td>Credit</td>
                                    <td><input type="text" name="credit" value="" class="disabled"></td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="dataEditModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Course Details</h4>
                </div>
                <div class="modal-body" id="course_details">
                    <div class="row">
                        <div class="row">
                            <div class=" col-md-8 col-lg-8 ">
                              <table class="table table-user-information">
                                <tbody>


                                  <tr>
                                      <td>CODE</td>
                                      <td><input type="text" name="code" value="" class="disabled"></td>
                                  </tr>

                                  <tr>
                                    <td>NAME</td>
                                    <td><input type="text" name="name" value="" class="disabled"></td>
                                  </tr>
                                  <tr>
                                    <td>Credit</td>
                                    <td><input type="text" name="credit" value="" class="disabled"></td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div id="dataDeleteModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class=" col-md-8 col-lg-8 ">
                            <p>You are about to delete.</p>
                            <p>Do you want to proceed?</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-yes">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var del_id = 1;

            $('.confirm-delete').on('click', function(e) {
                e.preventDefault();

                var id = $(this).attr("id");
                del_id = id;
                $('#dataDeleteModal').modal('show');
            });

            $('.btn-yes').click(function() {
                // handle deletion here
              	var id = $(this).attr("id");
                var u = '{{ route("courses.destroy", ":id") }}';
                u = u.replace(':id', del_id);

                $.ajax({
                    url: u,
                    method: "DELETE",
                    success: function(data) {
                        //callback
                    }
                });

                del_id = "";

              	$('#dataDeleteModal').modal('hide');
            });

            $(document).on('click', '.view_data', function() {
                // $('#dataViewModal').modal();
                var id = $(this).attr("id");
                var u = '{{ route("courses.show", ":id") }}';
                console.log(id);
                u = u.replace(':id', id);
                console.log(u);
                $.ajax({
                    url: u,
                    method: "GET",
                    success: function(data) {
                        console.log(data.name);
                        $('#dataViewModal')

                            .find('[name="name"]').val(data.name).end()
                            .find('[name="code"]').val(data.code).end()
                            .find('[name="credit"]').val(data.credit).end()

                        $('#dataViewModal').modal('show');
                    }
                });
            });

            //edit modal
            $(document).on('click', '.edit_data', function() {
                // $('#dataViewModal').modal();
                var id = $(this).attr("id");
                var u = '{{ route("courses.show", ":id") }}';
                console.log(id);
                u = u.replace(':id', id);
                console.log(u);
                $.ajax({
                    url: u,
                    method: "GET",
                    success: function(data) {
                        console.log(data.name);
                        $('#dataEditModal')
                            .find('[name="name"]').val(data.name).end()
                            .find('[name="code"]').val(data.code).end()
                            .find('[name="credit"]').val(data.credit).end()

                        $('#dataEditModal').modal('show');
                    }
                });
            });
        });
    </script>
@endsection
