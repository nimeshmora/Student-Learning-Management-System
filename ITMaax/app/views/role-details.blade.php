<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title>AdminLTE | Registration Page</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ URL::asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-black">

<div class="form-box" id="login-box">
    <div class="header">Register New Membership</div>
    <form action="{{URL::route('signup-post')}}" method="post">
        <div class="body bg-gray">
            <div class="form-group">
                <input type="text" name="fullname" {{ (Input::old('fullname')) ? 'value="'. Input::old('fullname').'"' : '' }} class="form-control" placeholder="Fullname"/>
                @if($errors ->has('fullname'))

                    {{ $errors->first('fullname', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="text" name="address" {{ (Input::old('address')) ? 'value="'. Input::old('address').'"' : '' }} class="form-control" placeholder="Address"/>
                @if($errors ->has('address'))

                    {{ $errors->first('address', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="text" name="nic" {{ (Input::old('nic')) ? 'value="'. Input::old('nic').'"' : '' }} class="form-control" placeholder="NIC"/>
                @if($errors ->has('nic'))

                    {{ $errors->first('nic', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="text" name="gender" {{ (Input::old('gender')) ? 'value="'. Input::old('gender').'"' : '' }} class="form-control" placeholder="Gender | Ex: male or female"/>
                @if($errors ->has('gender'))

                    {{ $errors->first('gender', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="text" name="dob" {{ (Input::old('dob')) ? 'value="'. Input::old('dob').'"' : '' }} class="form-control" placeholder="Date of Birth | Ex: 1990-5-11"/>
                @if($errors ->has('dob'))

                    {{ $errors->first('dob', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="text" name="regdate" {{ (Input::old('regdate')) ? 'value="'. Input::old('regdate').'"' : '' }} class="form-control" placeholder="Registration Date | Ex: 1990-5-11"/>
                @if($errors ->has('regdate'))

                    {{ $errors->first('regdate', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="text" name="batchid" {{ (Input::old('batchid')) ? 'value="'. Input::old('batchid').'"' : '' }} class="form-control" placeholder="Batch ID | Ex: 2"/>
                @if($errors ->has('batchid'))

                    {{ $errors->first('batchid', '<small class=error>:message</small>') }}
                @endif
            </div>


        </div>
        <div class="footer">

            <button type="submit" class="btn bg-olive btn-block">Sign me up</button>

            <a href="{{URL::route('login')}}" class="text-center">I already have a membership</a>
        </div>
    </form>

    <div class="margin text-center">
        <span>Register using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>
</div>


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

</body>
</html>