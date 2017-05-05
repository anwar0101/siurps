@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">
                    <div class="media-body">
                        <h2 class="media-heading text-success"> Custom Result Entry </h2>
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
                        <label for="department"> Department </label>
                        <select name="department" id="department" class="form-control">
                            @foreach ($departments as $department)
                                <option value="{{ $department->code }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="reg"> Registration No </label>
                        <input type="text" name="reg" id="reg" class="form-control"/>
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary"> Enter Result </button>
            </form>
        </div>
    </div>
@endsection
