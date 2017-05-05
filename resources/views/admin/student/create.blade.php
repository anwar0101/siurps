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
                        <h2 class="media-heading text-success"> Add Student </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <form id="addStudentForm" action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="department"> Select Department </label>
                            <select class="form-control" name="department" id="department">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->code}}"> {{ $department->name }} </option>
                                @endforeach
                            </select>
                        </div>
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
                            <label for="picture"> Picture </label>
                            <input type="file" name="picture" id="picture" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="contact"> Contact </label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="ex: 01712575784, 8801557225">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="contact"> Email </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel-footer">
            <button form="addStudentForm" type="submit" class="btn btn-primary"> Save </button>
            <button form="addDepartmentForm" type="submit" value="continue" class="btn btn-primary"> Save &amp; Continue </button>
            <button form="addStudentForm" type="reset" name="submit" class="btn btn-primary"> Clean </button>
        </div>
    </div>
@endsection
