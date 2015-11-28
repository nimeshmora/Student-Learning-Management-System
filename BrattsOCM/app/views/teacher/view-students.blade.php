@extends('master-layout')

@section('content')

    <div class="row center">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">My Students</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>

                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student Batch </th>
                            <th>Student Year</th>


                        </tr>
                        @if(isset($students))
                            @foreach ($students as $s)

                                <tr>
                                    <td>{{$s['s_id']}}</td>
                                    <td>{{$s['s_name']}}</td>
                                    <td>{{$s['batch_id']}}</td>
                                    <td>{{$s['s_year']}}</td>
                                </tr>

                            @endforeach
                        @endif


                    </table>

                </div><!-- /.box-body -->

            </div>
        </div>
    </div>
    <div class="row center">
        <div class="box">
            <div class="box-header with-border">
                @if(isset($subject))
                <h3 class="box-title">Assignment Marks - {{$subject}}</h3>
                    @endif
            </div><!-- /.box-header -->
        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" method="post" action="{{URL::route('assignment-mark-submit')}}">
                <div class="box-body">
                    <div class="form-group">

                        <div class="input-group col-lg-6 margin">
                            <div class="input-group-btn ">
                                <button type="button" class="btn btn-floating dropdown-toggle" data-toggle="dropdown">Select Student<span class="fa fa-caret-down"></span></button>
                                <ul class="dropdown-menu">
                                    @if(isset($students))
                                        @foreach ($students as $s)

                                            <li><a href="">{{$s['s_id']  }}</a></li>


                                        @endforeach

                                    @endif
                                </ul>

                            </div><!-- /btn-group -->
                            <div>

                                <input type="text" class="courseID form-control left-buffer" value="" name="student_id" {{ (Input::old('course_id')) ? 'value="'. Input::old('course_id').'"' : '' }}>

                                @if($errors ->has('student_id'))

                                    {{ $errors->first('student_id', '<small class=error>:message</small>') }}
                                @endif
                            </div>


                            </div>
                        <div class="col-lg-3">
                            <label for="inputPassword3" class="col-sm-2 control-label">Assignment Grade</label>


                            <input type="text" class="courseID form-control left-buffer" value="" name="grade" {{ (Input::old('grade')) ? 'value="'. Input::old('grade').'"' : '' }}>

                            @if($errors ->has('grade'))

                                {{ $errors->first('grade', '<small class=error>:message</small>') }}
                            @endif
                        </div>

                    </div>
                    <button type="submit" class="btn btn-info pull-right">View Students</button>

                </div>

            </form>
            </div>

        </div>


@endsection

@section('scripts')
    <script type="text/javascript">

        $(function(){

            $(".dropdown-menu li a").click(function(e){
                e.preventDefault();
                $(".courseID").val($(this).text());


            });

        });


    </script>
@endsection