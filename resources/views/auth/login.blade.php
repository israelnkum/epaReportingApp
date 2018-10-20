{{--<form  id="loginform" action="http://eliteadmin.themedesigner.in/demos/bt4/horizontal-nav-fullwidth/index.html">
    <h3 class="text-center m-b-20">Sign In</h3>
    <div class="form-group ">
        <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Username"> </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Password"> </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <div class="d-flex no-block align-items-center">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
                <div class="ml-auto">
                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="col-xs-12 p-b-20">
            <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
        </div>
    </div>
</form>--}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Israel NKum">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://eliteadmin.themedesigner.in/demos/bt4/assets/images/favicon.png">
    <title>Environmental Protection Agency</title>

    <!-- page css -->
    <link href="{{asset('css/pages/login-register-lock.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Environmental Protection Agency</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url({{asset('img/login_bg.JPG')}});">
        <div class="login-box card">
            <div class="card-body">

                <form method="POST" id="loginform" class="form-horizontal form-material" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="{{asset('img/loginHeader.png')}}" height="80" width="80">
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="email" type="email" placeholder="Email Address" class="mt-3 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                       <div class="col-md-12">
                            <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6 text-right">
                            <a href="{{ route('password.request') }}" id="to-recover"  class="text-muted"><i class="fas fa-lock m-r-5"></i>Forgot Password?</a>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-block btn-info">
                                {{ __('Login') }}
                            </button>

                            {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                {{--{{ __('') }}--}}
                            {{--</a>--}}
                        </div>
                    </div>
                </form>

                <form method="POST" class="form-horizontal" id="recoverform" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="{{asset('img/forgot.png')}}" height="80" width="80">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12 text-center">
                            <h3>Recover Password</h3>
                            <p class="text-danger">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="email" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block  waves-effect waves-light">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 text-right mt-4">
                        <a href="{{asset('login')}}"   class="text-danger"><i class="fas fa-sign-in-alt m-r-5"></i>Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script><!--Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>

</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/horizontal-nav-fullwidth/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Sep 2018 20:43:56 GMT -->
</html>
