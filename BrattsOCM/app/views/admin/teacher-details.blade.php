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
                <form class="form-horizontal" method="post" action="{{URL::route('add-teacher-details-post')}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fullname" {{ (Input::old('fullname')) ? 'value="'. Input::old('fullname').'"' : '' }} placeholder="Full Name">
                                @if($errors ->has('fullname'))

                                    {{ $errors->first('fullname', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" {{ (Input::old('address')) ? 'value="'. Input::old('address').'"' : '' }} placeholder="AddressEx: Street 1, City">
                                @if($errors ->has('address'))

                                    {{ $errors->first('address', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="gender" {{ (Input::old('gender')) ? 'value="'. Input::old('gender').'"' : '' }} placeholder="Gendeer Ex: male or female">
                                @if($errors ->has('gender'))

                                    {{ $errors->first('gender', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">NIC</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nic" {{ (Input::old('nic')) ? 'value="'. Input::old('nic').'"' : '' }} placeholder="NIC Ex: 9013229845">
                                @if($errors ->has('nic'))

                                    {{ $errors->first('nic', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">

                        <button type="submit" class="btn btn-info pull-right">Add</button>
                    </div><!-- /.box-footer -->
                </form>
            </div><!-- /.box -->
        </div>

    </div>
@endsection