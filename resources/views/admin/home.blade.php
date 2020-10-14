@extends('admin.template')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title float-left">Dashboard</h4>

                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item">Dashboard</li>
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
                <div class="col-sm-12">
                    <div class="text-right">
                        <a href="#" role="button" class="btn btn-danger waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-power m-r-5"></i> Log Out
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="text-center m-t-30">Hi, {{ Auth::user()->nama }}.!</h2>
            <h2 class="text-center">Selamat Datang di Halaman Admin CariKost</h2>
        </div>
        <!--/ meta -->
    </div>
    </div>
    <!-- end row -->

</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {

    });
</script>
@endsection