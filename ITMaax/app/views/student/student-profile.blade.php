@extends('master-layout')

@section('heading')
    <h3>Student Profile</h3>
    @endsection

@section('content')
    <div class="row center">
        <div class="col-md-10 col-md-offset-1">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <h3 class="profile-username text-center">{{$data->s_name}}</h3>
                    <p class="text-muted text-center">Student</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Batch</b> <a class="pull-right">{{$data->batch_id}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Registration Date</b> <a class="pull-right">{{$data->reg_date}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Academic Year</b> <a class="pull-right">{{$data->s_year}}</a>
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
                   {{$data->address}}
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i>Date of Birth</strong>
                    <p class="text-muted">{{$data->dob}}</p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i>NIC</strong>
                    <p class="text-muted">{{$data->NIC}}</p>

                    <hr>
                    <strong><i class="fa fa-pencil margin-r-5"></i> NIC</strong>
                    <p>
                        <span class="label label-danger">UI Design</span>
                        <span class="label label-success">Coding</span>
                        <span class="label label-info">Javascript</span>
                        <span class="label label-warning">PHP</span>
                        <span class="label label-primary">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>
    @endsection