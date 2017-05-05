@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">
                    <div class="media-body">
                        <h2 class="media-heading text-success"> Final Result Entry Form </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <table class="w3-table-all w3-small" id="printTable">
                <tr class="w3-green">
                    <th> ID </th>
                    <th> Name </th>

                    @foreach ($courses as $course)
                    <th> {{ $course->code }} </th>
                    @endforeach
                </tr>

                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>

                    @foreach ($student->courses as $course)
                        <td>
                            {{ $course->pivot->grade_point }}
                        </td>
                    @endforeach
                </tr>
                @endforeach
            </table>
        </div>
        </div>
        <div class="panel-footer">
            <button form="resultEntry" type="button" class="btn btn-primary"> Print </button>
        </div>
    </div>

    <script type="text/javascript">
    function printData()
    {
        var divToPrint=document.getElementById("printTable");
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('button').on('click',function(){
        printData();
    })
    </script>
@endsection
