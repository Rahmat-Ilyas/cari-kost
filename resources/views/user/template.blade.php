<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cari Kost &mdash; Website Cari Kost Sekitar UIN Alauddin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
	<link rel="stylesheet" href="{{ asset('user/fonts/icomoon/style.css') }}">

	<link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/mediaelementplayer.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('user/fonts/flaticon/font/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/fl-bigmug-line.css') }}">


	<link rel="stylesheet" href="{{ asset('user/css/aos.css') }}">

	<link rel="stylesheet" href="{{ asset('user/css/style.css') }}">

</head>
<body>
	<div class="site-loader"></div>

	<div class="site-wrap shadow bg-white rounded mb-5" style="position: fixed; width: 100%; top: 0; z-index: 99; ">

		<div class="site-mobile-menu">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div> <!-- .site-mobile-menu -->

		<div class="border-bottom bg-white top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6 col-md-6">
						<p class="mb-0">
							<a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">+62 812-4353-2207</span></a>
							<a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">service@carikost.com</span></a>
						</p>  
					</div>
					<div class="col-6 col-md-6 text-right">
						<a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
						<a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
						<a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
					</div>
				</div>
			</div>

		</div>
		<div class="site-navbar">
			<div class="container py-1">
				<div class="row align-items-center">
					<div class="col-8 col-md-8 col-lg-4">
						<a href="{{ url('/') }}" class="h5 text-uppercase text-black"><img src="{{ asset('user/images/logocarikost.png') }}" alt=""></a>
					</div>
					<div class="col-4 col-md-4 col-lg-8">
						<nav class="site-navigation text-right text-md-right" role="navigation">

							<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

							<ul class="site-menu js-clone-nav d-none d-lg-block">
								<li class="active"><a href="{{ url('owner/regist') }}">Iklankan Kost Anda!</a></li>
								<li><a href="#">Pusat Bantuan</a></li>
								<li><a href="#">Kontak</a></li>
								<li class="has-children">
									<a href="properties.html">Login</a>
									<ul class="dropdown">
										<li><a href="{{ url('owner/login') }}">Sebagai Owner</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>


				</div>
			</div>
		</div>
	</div>

	@yield('content')

	<div class="site-section site-section-sm bg-primary">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8">
					<h2 class="text-white">Apakah Anda Penyedia Kost?</h2>
					<p class="lead text-white-5">Iklankan kost anda di carikost.com gratis</p>
				</div>
				<div class="col-md-4 text-center">
					<a href="{{ url('owner/regist') }}" class="btn btn-outline-primary btn-block py-3 btn-lg">Iklankan Kost</a>
				</div>
			</div>
		</div>
	</div>

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="mb-5">
						<h3 class="footer-heading mb-4">About HomeSpace</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
					</div>



				</div>
				<div class="col-lg-4 mb-5 mb-lg-0">
					<div class="row mb-5">
						<div class="col-md-12">
							<h3 class="footer-heading mb-4">Navigations</h3>
						</div>
						<div class="col-md-6 col-lg-6">
							<ul class="list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">Buy</a></li>
								<li><a href="#">Rent</a></li>
								<li><a href="#">Properties</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-6">
							<ul class="list-unstyled">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Terms</a></li>
							</ul>
						</div>
					</div>


				</div>

				<div class="col-lg-4 mb-5 mb-lg-0">
					<h3 class="footer-heading mb-4">Follow Us</h3>

					<div>
						<a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
						<a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
						<a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
						<a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
					</div>



				</div>

			</div>
			<div class="row pt-5 mt-5 text-center">
				<div class="col-md-12">
					<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;</script><script>document.write(new Date().getFullYear());</script> All rights reserved | Karpten (KRP)
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>

		</div>
	</div>
</footer>

</div>

<script src="{{ asset('user/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-ui.js') }}"></script>
<script src="{{ asset('user/js/popper.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user/js/mediaelement-and-player.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('user/js/aos.js') }}"></script>

<script src="{{ asset('user/js/main.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKN8E3VeLkA5mgeENXiKp9tjhPlQ95TPc&callback=initMap"></script>
@yield('js')
<script>
	$(document).ready(function() {
		$('#submit').click(function() {
			$('#harga').val($('#amount').val());
		});
		$.ajaxSetup({
			headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
		});

		$.ajax({
			url         : "{{ url('/owner/getdatakost') }}",
			method      : "POST",
			dataType    : "JSON",
			data        : { owner_id : null, req : 'all' },
			success     : function(data) {
				$.each(data.datakost, function(i, val) {
					var nama_kost = val.nama_kost;
					var lokasi_kost = val.lokasi_kost;
					var tipe_kost = val.tipe_kost;
					var foto_kost = val.foto_1;

				});
			}
		});
	});
</script>

</body>
</html>