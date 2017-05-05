@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">
                    <div class="media-body">
                        <h2 class="media-heading text-success"> Result Entry </h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-right">

                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <form id="resultEntry" action="{{ route('results.view') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <label for="department"> Select Department </label>
                        <select name="department" id="department" class="form-control">
                            @foreach ($departments as $department)
                                <option value="{{ $department->code }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>

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
                <br>

                <button type="submit" class="btn btn-primary"> Enter Result </button>
            </form>
        </div>
    </div>
@endsection
