@extends('master-layout')

@section('content')
    <div class="row center">
        <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Courses</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{URL::route('add-course-post')}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Course Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="course_name" {{ (Input::old('course_name')) ? 'value="'. Input::old('course_name').'"' : '' }} placeholder="Course Name">
                                @if($errors ->has('course_name'))

                                    {{ $errors->first('course_name', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Credits</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="credit" {{ (Input::old('credit')) ? 'value="'. Input::old('credit').'"' : '' }} placeholder="Credits">
                                @if($errors ->has('credit'))

                                    {{ $errors->first('credit', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Course ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="c_id" {{ (Input::old('c_id')) ? 'value="'. Input::old('c_id').'"' : '' }} placeholder="Course ID">
                                @if($errors ->has('c_id'))

                                    {{ $errors->first('c_id', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="input-group col-lg-6 margin">
                            <div class="input-group-btn ">
                                <button type="button" class="btn btn-floating dropdown-toggle" data-toggle="dropdown">Select Teacher<span class="fa fa-caret-down"></span></button>
                                <ul class="dropdown-menu">
                                    @if(isset($teachers))
                                        @foreach ($teachers as $t)

                                            <li><a href="">{{$t->t_id  }}</a></li>


                                @endforeach

                                @endif
                                </ul>

                            </div><!-- /btn-group -->
                            <input type="text" class="teacher-text form-control left-buffer" value="" name="teacher_id">
                        </div><!-- /input-group -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">

                        <button type="submit" class="btn btn-info pull-right">Add</button>
                    </div><!-- /.box-footer -->
                </form>
            </div><!-- /.box -->
        </div>


    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

        $(function(){

            $(".dropdown-menu li a").click(function(e){
                e.preventDefault();
                $(".teacher-text").val($(this).text());


            });

        });


    </script>
    @endsection