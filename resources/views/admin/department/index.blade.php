@extends('admin.layouts.app')

@section('dash')
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row media">
            <div class="col-md-5">
                @foreach ($errors->all() as $error) {{ $error }} @endforeach
                <div class="media-body">
                    <h2 class="media-heading text-success"> All departments </h2>
                </div>
            </div>
            <div class="col-md-4">
                <form class="" action="" method="post">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search_department" placeholder="Search department.....">
                        <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
                            </span>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <div class="text-right">
                    <a href="{{ route('departments.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Add Department </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <table class="table table-striped table-hover">
            <thead>
                <th> Code </th>
                <th> Name </th>
                <th> Programe </th>
                <th> View </th>
                <th> Edit </th>
                <th> Delete </th>
            </thead>
            @foreach ($departments as $department)
            <tbody>
                <tr>
                    <td> {{ $department->code }}</td>
                    <td> {{ $department->name }}</td>
                    <td> {{ $department->program }}</td>

                    <td> <button type="button" id="{{ $department->code }}" class="btn btn-primary btn-sm view_data"> <i class="fa fa-eye fa-lg"></i> </button> </td>

                    <td> <button type="button" id="{{ $department->code }}" class="btn btn-success btn-sm edit_data">
                                <i class="fa fa-edit fa-lg"></i>
                            </button></td>
                    <td> <button type="button" data-id="{{ $department->code }}" class="btn btn-danger btn-sm confirm-delete"> <i class="fa fa-trash fa-lg"></i> </button> </td>
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
                <h4 class="modal-title">Department Details</h4>
            </div>
            <div class="modal-body" id="department_details">
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
                                <td>Program</td>
                                <td><input type="text" name="program" value="" class="disabled"></td>
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
                <h4 class="modal-title">Department Edit Form</h4>
            </div>
            <div class="modal-body" id="department_details">
                <div class="row">
                    <div class="row">
                        <div class=" col-md-8 col-lg-8 ">
                          <form id="departmentEditForm" action="" method="post">
                              <table class="table table-user-information">
                                <tbody>

                                  <tr>
                                      <td>CODE</td>
                                      <td><input type="text" name="code" value="" ></td>
                                  </tr>

                                  <tr>
                                    <td>NAME</td>
                                    <td><input type="text" name="name" value="" ></td>
                                  </tr>
                                  <tr>
                                    <td>Program</td>
                                    <td><input type="text" name="program" value=""></td>
                                  </tr>

                                </tbody>
                              </table>
                          </form>
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
            var u = '{{ route("departments.show", ":id") }}';
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
                        .find('[name="program"]').val(data.code).end()

                    $('#dataViewModal').modal('show');
                }
            });
        });

        //edit modal
        $(document).on('click', '.edit_data', function() {
            // $('#dataViewModal').modal();
            var id = $(this).attr("id");
            var u = '{{ route("departments.show", ":id") }}';
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
                        .find('[name="program"]').val(data.code).end()

                    $('#dataEditModal').modal('show');
                }
            });
        });
    });
</script>

@endsection
