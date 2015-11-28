@extends('master-layout')

@section('content')

    <div class="row center">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Subjects Offer</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Subject Name</th>
                            <th>Subject Credits</th>

                        </tr>
                        @if(isset($courses))
                            @foreach ($courses as $c)

                                <tr>
                                    <td>{{$c['c_id']}}</td>
                                    <td>{{$c['c_name']}}</td>
                                    <td>{{$c['c_credits']}}</td>
                                </tr>

                            @endforeach
                        @endif


                    </table>

                </div><!-- /.box-body -->

            </div>
            <form class="form-horizontal" method="post" action="{{URL::route('student-enroll-post')}}">
                <div class="box-body">
                    <div class="form-group">
            <div class="input-group col-lg-6 margin">
                <div class="input-group-btn ">
                    <button type="button" class="btn btn-floating dropdown-toggle" data-toggle="dropdown">Enroll<span class="fa fa-caret-down"></span></button>
                    <ul class="dropdown-menu">
                        @if(isset($courses))
                            @foreach ($courses as $c)

                                <li><a href="">{{$c['c_id']  }}</a></li>


                            @endforeach

                        @endif
                    </ul>

                </div><!-- /btn-group -->
                <div>

                    <input type="text" class="courseID form-control left-buffer" value="" name="course_id" {{ (Input::old('course_id')) ? 'value="'. Input::old('course_id').'"' : '' }}>

                    @if($errors ->has('course_id'))

                        {{ $errors->first('course_id', '<small class=error>:message</small>') }}
                    @endif
                </div>

            </div><!-- /input-group -->


            <div>

                <button type="submit" class="btn btn-info pull-right">Enroll</button>
            </div>
                        </div>
                    </div>
                <div
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