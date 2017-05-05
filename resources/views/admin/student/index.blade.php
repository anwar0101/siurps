@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">

                    <div class="media-body">
                        <h2 class="media-heading text-success"> All Students </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <form class="" action="" method="post">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search_employee" placeholder="Search Students.....">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="text-right">
                        <a href="{{ route('students.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Add Student </a>
                    </div>
                    @include('admin.layouts.partials.addstudentmodal')
                </div>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <th> ID </th>
                    <th> REG </th>
                    <th> Name </th>
                    <th> Contact </th>
                    <th> View </th>
                    <th> Edit </th>
                    <th> Delete </th>

                </thead>
                @foreach ($students as $student)
                    <tbody>
                        <tr>
                            <td> {{ $student->id }}</td>
                            <td> {{ $student->reg }}</td>
                            <td> {{ $student->name }}</td>
                            <td> {{ $student->contact }}</td>

                            <td> <button type="button" id="{{ $student->reg }}" class="btn btn-primary btn-sm view_data"> <i class="fa fa-eye fa-lg"></i> </button> </td>

                            <td> <button type="button" id="{{ $student->reg }}" class="btn btn-success btn-sm edit_data">
                                        <i class="fa fa-edit fa-lg"></i>
                                    </button></td>
                            <td> <button type="button" data-id="{{ $student->reg }}" class="btn btn-danger btn-sm confirm-delete"> <i class="fa fa-trash fa-lg"></i> </button> </td>
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
                    <h4 class="modal-title">Student Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class=" col-md-12 col-lg-12 ">
                            <form id="addStudentForm" action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <img src="" id="profile_pic" class="img-responsive img-rounded" height="200px" width="200px" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="id"> ID </label>
                                            <input type="text" name="id" id="id" class="form-control" placeholder="Roll No..">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="reg"> Registration </label>
                                            <input type="text" name="reg" id="reg" class="form-control" placeholder="Registration No..">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="semester"> Select semester </label>
                                            <select class="form-control" name="semester" id="semester">
                                                <option value="1-1">1-1</option>
                                                <option value="1-2">1-2</option>
                                                <option value="2-1">1-2</option>
                                                <option value="2-2">1-2</option>
                                                <option value="3-1">3-1</option>
                                                <option value="3-2">3-2</option>
                                                <option value="4-1">4-1</option>
                                                <option value="4-2">4-2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label for="name"> Name </label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="dob"> Date of Birth </label>
                                            <input type="date" name="dob" id="dob" class="form-control" placeholder="ex: 2017/01/25">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="father_name"> Father Name </label>
                                            <input type="text" name="father_name" id="father_name" class="form-control" placeholder="Father's name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="mother_name"> Mother Name </label>
                                            <input type="text" name="mother_name" id="mother_name" class="form-control" placeholder="Mother's name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="present_address"> Present Address </label>
                                            <textarea type="text" rows="2" name="present_address" id="present_address" class="form-control" placeholder="House, Road, City ....."></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="permanent_address"> Permanent Address </label>
                                            <textarea type="text" rows="2" name="permanent_address" id="permanent_address" class="form-control" placeholder="House, Road, UP, Zilla"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contact"> Contact </label>
                                            <input type="text" name="contact" id="contact" class="form-control" placeholder="ex: 01712575784, 8801557225">
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                    <h4 class="modal-title">Student Edit Form Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class=" col-md-12 col-lg-12 ">
                            <form id="addStudentForm" action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="id"> ID </label>
                                            <input type="text" name="id" id="id" class="form-control" placeholder="Roll No..">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="reg"> Registration </label>
                                            <input type="text" name="reg" id="reg" class="form-control" placeholder="Registration No..">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="semester"> Select semester </label>
                                            <select class="form-control" name="semester" id="semester">
                                                <option value="1-1">1-1</option>
                                                <option value="1-2">1-2</option>
                                                <option value="2-1">1-2</option>
                                                <option value="2-2">1-2</option>
                                                <option value="3-1">3-1</option>
                                                <option value="3-2">3-2</option>
                                                <option value="4-1">4-1</option>
                                                <option value="4-2">4-2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label for="name"> Name </label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="dob"> Date of Birth </label>
                                            <input type="date" name="dob" id="dob" class="form-control" placeholder="ex: 2017/01/25">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="father_name"> Father Name </label>
                                            <input type="text" name="father_name" id="father_name" class="form-control" placeholder="Father's name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="mother_name"> Mother Name </label>
                                            <input type="text" name="mother_name" id="mother_name" class="form-control" placeholder="Mother's name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="present_address"> Present Address </label>
                                            <textarea type="text" rows="2" name="present_address" id="present_address" class="form-control" placeholder="House, Road, City ....."></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="permanent_address"> Permanent Address </label>
                                            <textarea type="text" rows="2" name="permanent_address" id="permanent_address" class="form-control" placeholder="House, Road, UP, Zilla"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contact"> Contact </label>
                                            <input type="text" name="contact" id="contact" class="form-control" placeholder="ex: 01712575784, 8801557225">
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                var u = '{{ route("students.show", ":id") }}';
                console.log(id);
                u = u.replace(':id', id);
                console.log(u);
                $.ajax({
                    url: u,
                    method: "GET",
                    success: function(data) {
                        console.log(data.name);
                        $('#dataViewModal')
                            .find('[name="id"]').val(data.id).end()
                            .find('[name="reg"]').val(data.reg).end()
                            .find('[name="semester"]').val(data.semester).end()
                            .find('[name="name"]').val(data.name).end()
                            .find('[name="dob"]').val(data.dob).end()
                            .find('[name="father_name"]').val(data.father_name).end()
                            .find('[name="mother_name"]').val(data.mother_name).end()
                            .find('[name="present_address"]').val(data.present_address).end()
                            .find('[name="permanent_address"]').val(data.permanent_address).end()
                            .find('[name="contact"]').val(data.contact).end()

                            $("#profile_pic").attr("src",data.picture.replace('public', 'storage'));

                        $('#dataViewModal').modal('show');
                    }
                });
            });

            //edit modal
            $(document).on('click', '.edit_data', function() {
                // $('#dataViewModal').modal();
                var id = $(this).attr("id");
                var u = '{{ route("students.show", ":id") }}';
                console.log(id);
                u = u.replace(':id', id);
                console.log(u);
                $.ajax({
                    url: u,
                    method: "GET",
                    success: function(data) {
                        console.log(data.name);
                        $('#dataEditModal')
                        .find('[name="id"]').val(data.id).end()
                        .find('[name="reg"]').val(data.reg).end()
                        .find('[name="semester"]').val(data.semester).end()
                        .find('[name="name"]').val(data.name).end()
                        .find('[name="dob"]').val(data.dob).end()
                        .find('[name="father_name"]').val(data.father_name).end()
                        .find('[name="mother_name"]').val(data.mother_name).end()
                        .find('[name="present_address"]').val(data.present_address).end()
                        .find('[name="permanent_address"]').val(data.permanent_address).end()
                        .find('[name="contact"]').val(data.contact).end()

                        $('#dataEditModal').modal('show');
                    }
                });
            });
        });
    </script>
@endsection
