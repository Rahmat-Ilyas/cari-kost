@extends('owner.template')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Dashboard</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item">Owner</li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-sm-12">
        <div class="profile-bg-picture" style="background-image:url('{{ asset('assets/images/bg-profile.jpg') }}')">
            <span class="picture-bg-overlay"></span><!-- overlay -->
        </div>
        <!-- meta -->
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-6">
                    <span class="pull-left m-r-15"><img src="{{ asset('images/foto_user/'.Auth::user()->foto) }}" alt="" class="thumb-lg rounded-circle"></span>
                    <div class="media-body">
                        <h4 class="m-t-5 m-b-5 font-18 ellipsis">{{ Auth::user()->nama }}</h4>
                        <p class="font-13"> {{ Auth::user()->kt_email }}</p>
                        <p class="text-muted m-b-0"><small>Alamat: {{ Auth::user()->alamat }}</small></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-right">
                        <button type="button" class="btn btn-success waves-effect waves-light">
                            <i class="mdi mdi-account-settings-variant m-r-5"></i> Edit Profile
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            <h2 class="text-center m-t-30">Hi, {{ Auth::user()->nama }}.!</h2>
            <h2 class="text-center">Selamat Datang di Halaman Owner CariKost</h2>
        </div>
        <!--/ meta -->
    </div>
</div>

</div>
@endsection

@section('js')
<!-- Counter js  -->
<script src="{{ asset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

<!--C3 Chart-->
<script type="text/javascript" src="{{ asset('plugins/d3/d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/c3/c3.min.js') }}"></script>

<!--Echart Chart-->
<script src="{{ asset('plugins/echart/echarts-all.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

<script>
    $(document)ready(function() {

    });
</script>
@endsection