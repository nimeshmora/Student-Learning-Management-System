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
                <form class="form-horizontal" method="post" action="{{URL::route('add-student-details-post')}}">
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
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Date of Birth</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="dob" {{ (Input::old('dob')) ? 'value="'. Input::old('dob').'"' : '' }} placeholder="DOB Ex: 1990-5-11">
                                @if($errors ->has('dob'))

                                    {{ $errors->first('dob', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Registration Date</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="rd" {{ (Input::old('rd')) ? 'value="'. Input::old('rd').'"' : '' }} placeholder="DOB Ex: 1990-5-11">
                                @if($errors ->has('rd'))

                                    {{ $errors->first('rd', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Batch</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="batch" {{ (Input::old('batch')) ? 'value="'. Input::old('batch').'"' : '' }} placeholder="batch 12">
                                @if($errors ->has('batch'))

                                    {{ $errors->first('batch', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Year</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="year" {{ (Input::old('year')) ? 'value="'. Input::old('year').'"' : '' }} placeholder="1 or 2">
                                @if($errors ->has('year'))

                                    {{ $errors->first('year', '<small class=error>:message</small>') }}
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