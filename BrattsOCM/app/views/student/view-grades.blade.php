@extends('master-layout')

@section('content')

    <div class="row center">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">My Grades</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>

                            <th>Subject Code</th>
                            <th>Subject Grade</th>

                        </tr>
                        @if(isset($data))
                            @foreach ($data as $d)

                                <tr>
                                    <td>{{$d['c_id']}}</td>
                                    <td>{{$d['grade']}}</td>
                                </tr>

                            @endforeach
                        @endif


                    </table>

                </div><!-- /.box-body -->

        </div>
    </div>
    </div>
@endsection

