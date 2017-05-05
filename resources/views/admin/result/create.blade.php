@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">
                    <div class="media-body">
                        @foreach ($errors->all() as $error)
                            {{  $error }}
                        @endforeach
                        <h2 class="media-heading text-success"> Final Result Entry Form </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <form id="resultEntry" action="{{ route('results.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="w3-responsive">
                    <table class="w3-table-all w3-small">
                        <tr class="w3-green">
                            <th> ID </th>
                            <th> Name </th>

                            @foreach ($courses as $course)
                            <th> {{ $course->code }} </th>
                            @endforeach
                        </tr>

                        @foreach ($students as $student)
                        <tr>
                            <input name="students[]" class="hide" value="{{ $student->reg }}">
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>

                            @foreach ($student->courses as $course)
                                <td>
                                    <input type="text" name="marks[{{ $course->code }}]" class="form-control" value="{{ $course->pivot->final_marks }}">
                                </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </table>
                </div>

            </form>
        </div>
        <div class="panel-footer">
            <button form="resultEntry" type="submit" class="btn btn-primary"> Save </button>
            <button form="resultEntry" type="reset" class="btn btn-primary"> Clean </button>
        </div>
    </div>
@endsection
