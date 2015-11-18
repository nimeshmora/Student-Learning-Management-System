@extends('master-layout')

@section('content')
    <div class="row center">
    <div class="col-md-10 col-md-offset-1">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Register Teacher</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{URL::route('add-teacher-form-post')}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" {{ (Input::old('username')) ? 'value="'. Input::old('username').'"' : '' }} placeholder="username">
                            @if($errors ->has('username'))

                                {{ $errors->first('username', '<small class=error>:message</small>') }}
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" {{ (Input::old('password')) ? 'value="'. Input::old('password').'"' : '' }} placeholder="Password">
                            @if($errors ->has('password'))

                                {{ $errors->first('password', '<small class=error>:message</small>') }}
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="confirm-password" {{ (Input::old('confirm-password')) ? 'value="'. Input::old('confirm-password').'"' : '' }} placeholder="Password">
                            @if($errors ->has('confirm-password'))

                                {{ $errors->first('confirm-password', '<small class=error>:message</small>') }}
                            @endif
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-right">Next</button>
                </div><!-- /.box-footer -->
            </form>
        </div><!-- /.box -->
    </div>


    </div>
    @endsection