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
                <input type="text" name="username" {{ (Input::old('username')) ? 'value="'. Input::old('username').'"' : '' }} class="form-control" placeholder="Username"/>
                @if($errors ->has('username'))

                    {{ $errors->first('username', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="password" name="password" {{ (Input::old('password')) ? 'value="'. Input::old('password').'"' : '' }} class="form-control" placeholder="Password"/>
                @if($errors ->has('password'))

                    {{ $errors->first('password', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="password" name="confirm-password" {{ (Input::old('confirm-password')) ? 'value="'. Input::old('confirm-password').'"' : '' }} class="form-control" placeholder="Retype password"/>
                @if($errors ->has('confirm-password'))

                    {{ $errors->first('confirm-password', '<small class=error>:message</small>') }}
                @endif
            </div>
            <div class="form-group">
                <input type="text" name="role" {{ (Input::old('role')) ? 'value="'. Input::old('role').'"' : '' }} class="form-control" placeholder="Ex: student | Ex. teacher"/>
                @if($errors ->has('role'))

                    {{ $errors->first('role', '<small class=error>:message</small>') }}
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