@extends('master-layout')

@section('heading')
    <h3>Teacher Profile</h3>
@endsection

@section('content')
    <div class="row center">
        <div class="col-md-10 col-md-offset-1">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <h3 class="profile-username text-center">{{$data->t_name}}</h3>
                    <p class="text-muted text-center">Teacher</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Registration ID</b> <a class="pull-right">{{$data->t_id}}</a>
                        </li>

                    </ul>


                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Address</strong>
                    <p class="text-muted">
                        {{$data->t_address}}
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i>Gender</strong>
                    <p class="text-muted">{{$data->t_gender}}</p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i>NIC</strong>
                    <p class="text-muted">{{$data->t_nic}}</p>

                    <hr>
                    <p>
                        <span class="label label-danger">UI Design</span>
                        <span class="label label-success">Coding</span>
                        <span class="label label-info">Javascript</span>
                        <span class="label label-warning">PHP</span>
                        <span class="label label-primary">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                    <p>Senior Lecturer , Institute of ITMax</p>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>
@endsection