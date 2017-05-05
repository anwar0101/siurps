@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">
                    <div class="media-body">
                        <h2 class="media-heading text-success">Course Entry Form </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <form id="addCourseForm" action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="code"> Course Code </label>
                            <input type="text" name="code" id="code" class="form-control" placeholder="Course code">
                        </div>
                        <div class="col-md-6">
                            <label for="name"> Course Title </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Course title">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="credit"> Course Credit </label>
                            <input type="text" name="credit" id="credit" class="form-control" placeholder="Course Credit">
                        </div>
                        <div class="col-md-6">
                            <label for="department"> Select Department </label>
                            <select class="form-control" name="department" id="department">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->code }}"> {{ $department->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="semester"> Select Semester </label>
                            <select name="semester" id="semester" class="form-control">
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

            </form>
        </div>
        <div class="panel-footer">
            <button form="addCourseForm" type="reset" class="btn btn-primary"> Clean </button>
            <button form="addCourseForm" type="submit" class="btn btn-primary"> Save </button>
            <button form="addCourseForm" type="submit" name="submit" value="continue" class="btn btn-primary"> Save &amp; Continue </button>
        </div>
    </div>
@endsection
