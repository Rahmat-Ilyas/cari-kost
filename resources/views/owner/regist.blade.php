<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registrasi Owner - CariKost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Jquery filer css -->
    <link href="{{ asset('plugins/jquery.filer/css/jquery.filer.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') }}" rel="stylesheet" />

    <!-- Bootstrap fileupload css -->
    <link href="{{ asset('plugins/bootstrap-fileupload/bootstrap-fileupload.css') }}" rel="stylesheet" />

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
                                    <h5 class="text-uppercase font-bold m-b-5 m-t-50">Registrasi Owner</h5>
                                    <p class="m-b-0">Lakukan Registrasi terlebih dahulu sebelum mengiklankan kost Anda!</p>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="POST" action="{{ route('owner.regist.submit') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }} 
                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="nama">Nama Lengkap</label>
                                                <input class="form-control" type="text" name="nama" id="nama" required="" placeholder="Nama Lengkap">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name="email" id="email" required="" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Username</label>
                                                <input class="form-control" name="username" type="text" required="" id="username" placeholder="Username">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Alamat Lengkap</label>
                                                <textarea class="form-control" name="alamat" type="text" required="" id="alamat"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label>Upload Foto</label>
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail rounded-circle" style="width: 200px; height: 200px;">
                                                        <img src="{{ asset('images/user.png') }}" alt="image" />
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail rounded-circle bg-dark" style="min-width: 200px; max-width: 200px; max-height: 200px; line-height: 20px;"></div>
                                                    <div class="col-6 text-center">
                                                        <button type="button" class="btn btn-secondary btn-file">
                                                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                            <input type="file" name="foto" class="btn-secondary" required="" />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" required="">
                                                    <label for="remember">
                                                        Dengan ini saya menyetujui <a href="#">syarat & ketentuan</a> yang berlaku
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Daftar Gratis</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <button type="button" class="btn m-r-5 btn-facebook waves-effect waves-light">
                                                    <i class="fa fa-facebook"></i>
                                                </button>
                                                <button type="button" class="btn m-r-5 btn-googleplus waves-effect waves-light">
                                                    <i class="fa fa-google"></i>
                                                </button>
                                                <button type="button" class="btn m-r-5 btn-twitter waves-effect waves-light">
                                                    <i class="fa fa-twitter"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row m-t-50">
                                        <div class="col-12 text-center">
                                            <p class="text-muted">Sudah punya akun?  <a href="page-login.html" class="text-dark m-l-5"><b>Log In</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>


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

    <!-- Jquery filer js -->
    <script src="{{ asset('plugins/jquery.filer/js/jquery.filer.min.js') }}"></script>

    <!-- Bootstrap fileupload js -->
    <script src="{{ asset('plugins/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
    <!-- page specific js -->
    <script src="{{ asset('assets/pages/jquery.fileuploads.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

</body>
</html>