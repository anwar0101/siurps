@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">
                    <div class="media-body">
                        <h2 class="media-heading text-success"> Departments </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <form id="addDepartmentForm" action="{{ route('departments.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="code"> Department Code </label>
                            <input type="text" name="code" id="code" class="form-control" placeholder="ex: CSE">
                        </div>
                        <div class="col-md-6">
                            <label for="name"> Department Name </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Department Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="program"> Program </label>
                            <input type="text" name="program" id="program" class="form-control" placeholder="ex: BSC Engg">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="panel-footer">
            <button form="addDepartmentForm" type="submit" class="btn btn-primary"> Save </button>
            <button form="addDepartmentForm" type="submit" name="submit" value="continue" class="btn btn-primary"> Save &amp; Continue </button>
            <button form="addDepartmentForm" type="reset" class="btn btn-primary"> Clean </button>
        </div>
    </div>
@endsection
