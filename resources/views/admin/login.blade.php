<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login Admin - CariKost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.cs') }}s" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

</head>


<body class="bg-accpunt-pages">

    <!-- HOME -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="account-pages">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase text-center">
                                        <a href="index.html" class="text-success">
                                            <span><img src="{{ asset('user/images/logocarikost.png') }}" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                                        {{ csrf_field() }}        
                                        <div class="form-group m-b-20 row">
                                            <div class="col-12">
                                                <label for="emailaddress">Username</label>
                                                <input class="form-control" name="username" value="{{ old('username') }}" type="text" id="emailaddress" required="" placeholder="Enter your username" autofocus>
                                            </div>
                                            @if ($errors->has('username'))
                                            <div class="col-12">
                                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" name="password" value="{{ old('password') }}" type="password" required="" id="password" placeholder="Enter your password">
                                            </div>
                                            @if ($errors->has('password'))
                                            <div class="col-12">
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" name="remember">
                                                    <label for="remember">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->


                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->



    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

</body>
</html>