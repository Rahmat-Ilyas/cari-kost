@extends('user.template')
@section('content')
<div id="maps"style="margin-top: 100px; height: 600px;">
</div>

<div class="site-blocks-cover overlay" style="margin-top: -600px;" data-aos="fade" data-stellar-background-ratio="0.0">
	<div class="container" style="">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Info Detail Kost</span>
				<h1 class="mb-2">{{ $kost->nama_kost }}</h1>
				<p class="mb-5"><strong class="h2 text-success font-weight-bold">#{{ $kost->tipe_kost }}</strong></p>
			</div>
		</div>
	</div>
</div>

<div class="site-section site-section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-7" style="margin-top: -150px;">
				<div class="mb-5">
					<div class="slide-one-item home-slider owl-carousel">
						<div><img src="{{ asset('images/foto_kost/'.$kost->foto_1) }}" alt="Image" class="img-fluid" style="max-height: 600px; min-height: 600px;"></div>
						<div><img src="{{ asset('images/foto_kost/'.$kost->foto_2) }}" alt="Image" class="img-fluid" style="max-height: 600px; min-height: 600px;"></div>
						<div><img src="{{ asset('images/foto_kost/'.$kost->foto_3) }}" alt="Image" class="img-fluid" style="max-height: 600px; min-height: 600px;"></div>
						<div><img src="{{ asset('images/foto_kost/'.$kost->foto_4) }}" alt="Image" class="img-fluid" style="max-height: 600px; min-height: 600px;"></div>
					</div>
				</div>
				<div class="bg-white">
					<div class="row mb-5">
						<div class="col-md-12">
							<strong class="text-success h1 mb-3">{{ $kost->nama_kost }}</strong><br>
							<span>#{{ $kost->tipe_kost }}</span><br>
							<span>Luas Kamar:</span><br>
							<span><b>{{ $kost->luas_kamar }} m<sup>2</sup></b></span>
						</div>
					</div>
					@php
					$harga = explode(', ', $kost->harga_kost);
					$jwt = explode(', ', $kost->jangkawaktu);
					$fasilitas = explode(', ', $kost->fasilitas)
					@endphp
					<h2 class="h4 text-black">Harga Kost</h2>
					<div class="row mb-5">
						<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
							<span class="d-inline-block text-black mb-0 caption-text">Harga/minggu</span>
							<strong class="d-block">
								<?php foreach($jwt as $i => $jw) { if($jw == 'per Minggu') { $minggu = true; ?>
								<strong>Rp. {{ $harga[$i] }}</strong>
								<?php } } if(empty($minggu)) { ?>
								<strong>-</strong>
								<?php } $minggu = null; ?>
							</strong>
						</div>
						<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
							<span class="d-inline-block text-black mb-0 caption-text">Harga/bulan</span>
							<strong class="d-block">
								<?php foreach($jwt as $i => $jw) { if($jw == 'per Bulan') { $bulan = true; ?>
								<strong>Rp. {{ $harga[$i] }}</strong>
								<?php } } if(empty($bulan)) { ?>
								<strong>-</strong>
								<?php } $bulan = null; ?>
							</strong>
						</div>
						<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
							<span class="d-inline-block text-black mb-0 caption-text">Harga/tahun</span>
							<strong class="d-block">
								<?php foreach($jwt as $i => $jw) { if($jw == 'per Tahun') { $tahun = true; ?>
								<strong>Rp. {{ $harga[$i] }}</strong>
								<?php } } if(empty($tahun)) { ?>
								<strong>-</strong>
								<?php } $tahun = null; ?>
							</strong>
						</div>
					</div>
					<h2 class="h4 text-black">Fasilitas</h2>
					<div class="row mb-5 border-bottom border-top">
						@foreach($fasilitas as $fas)
						<div class="col-md-6 col-lg-4 text-left py-3">
							<strong class="">- {{ $fas }}</strong>
						</div>
						@endforeach
					</div>
					<h2 class="h4 text-black">Deksripsi Kost</h2>
					<p>{{ $kost->deksripsi }}</p>
					<div class="row mt-5 pt-5 justify-content-center">
						<div class="col-6">
							<button class="btn btn-success btn-lg text-white btn-block" data-toggle="modal" data-target=".bd-example-modal-xl">MENUJU KOST</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4>{{ $kost->nama_kost }}</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div id="map" style="width: 100%; height: 500px;"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-5 pl-md-5">

				<div class="bg-white widget border rounded">
					<h3 class="h4 text-black widget-title mb-3">Data Pemilik Kost</h3>
					<div class="row">
						<div class="col-12 text-center">
							<img src="{{ asset('images/foto_user/'.$owner->foto) }}" alt="Image" class="img-fluid mb-2" style="height: 200px;">
						</div>
					</div>
					<div class="row">
						<label class="col-5">Name Pemilik</label>
						<label class="col-7 p-0">: {{ $owner->nama }}</label>
					</div>
					<div class="row">
						<label class="col-5">Alamat Pemilik</label>
						<label class="col-7 p-0">: {{ $owner->alamat }}</label>
					</div>
					<div class="row">
						<label class="col-5">Email</label>
						<label class="col-7 p-0">: {{ $owner->kt_email ? $owner->kt_email : '-' }}</label>
					</div>
					<div class="row">
						<label class="col-5">Telepon/WA</label>
						<label class="col-7 p-0">: {{ $owner->kt_telp_wa ? $owner->kt_telp_wa : '-' }}</label>
					</div>
					<div class="row">
						<label class="col-5">Facebook</label>
						<label class="col-7 p-0">: {{ $owner->kt_fb ? $owner->kt_fb : '-' }}</label>
					</div>
					<div class="row">
						<label class="col-5">Instagram</label>
						<label class="col-7 p-0">: {{ $owner->kt_ig ? $owner->kt_ig : '-' }}</label>
					</div>				
				</div>

				<div class="bg-white widget border rounded">

					<h3 class="h4 text-black widget-title mb-3">Kirim Pesan</h3>
					<form action="" class="form-contact-agent">
						<div class="form-group">
							<label for="name">Nama</label>
							<input type="text" id="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="pesan">Pesan</label>
							<textarea name="pesan" id="pesan" class="form-control" style="height: 150px;"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="phone" class="btn btn-primary" value="Kirim">
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="site-section site-section-sm bg-light">
	<div class="container">

		<div class="row">
			<div class="col-12">
				<div class="site-section-title mb-5">
					<h2>Penawaran Lainnya</h2>
				</div>
			</div>
		</div>

		<div class="row mb-5">
			@foreach($tawaran as $i => $dta)
			<div class="col-md-6 col-lg-4 mb-4">
				<a href="{{ url('kost/detailkost/'.$dta->id) }}" class="prop-entry d-block">
					<figure>
						<div id="carouselExampleCaptions" class="carousel slide" style="margin-bottom: -10px;" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="{{ asset('images/foto_kost/'.$dta->foto_1) }}" class="d-block w-100" height="350">
								</div>
								<div class="carousel-item">
									<img src="{{ asset('images/foto_kost/'.$dta->foto_2) }}" class="d-block w-100" height="350">
								</div>
								<div class="carousel-item">
									<img src="{{ asset('images/foto_kost/'.$dta->foto_3) }}" class="d-block w-100" height="350">
								</div>
								<div class="carousel-item">
									<img src="{{ asset('images/foto_kost/'.$dta->foto_4) }}" class="d-block w-100" height="350">
								</div>
							</div>
						</div>
					</figure>
					@php
					$harga = explode(', ', $dta->harga_kost);
					$jwt = explode(', ', $dta->jangkawaktu);
					@endphp
					<div class="prop-text">
						<div class="inner">
							<span class="price rounded" id="tipe_kost">#{{ $dta->tipe_kost }}</span>
							<h3 class="title" id="nama_kost">{{ $dta->nama_kost }}</h3>
							<p class="location mb-0" id="lokasi_kost">{{ $dta->lokasi_kost }}</p>	
						</div>
						<div class="prop-more-info">
							<div class="inner d-flex text-center">
								<div class="col">
									<span>Luas Kamar</span>
									<strong>{{ $dta->luas_kamar }}m<sup>2</sup></strong>
								</div>
								<div class="col">
									<span>Harga/minggu</span>

									<?php foreach($jwt as $i => $jw) { if($jw == 'per Minggu') { $minggu = true; ?>
									<strong>Rp. {{ $harga[$i] }}</strong>
									<?php } } if(empty($minggu)) { ?>
									<strong>-</strong>
									<?php } $minggu = null; ?>
								</div>
								<div class="col">
									<span>Harga/bulan</span>
									<?php foreach($jwt as $i => $jw) { if($jw == 'per Bulan') { $bulan = true; ?>
									<strong>Rp. {{ $harga[$i] }}</strong>
									<?php } } if(empty($bulan)) { ?>
									<strong>-</strong>
									<?php } $bulan = null; ?>
								</div>
								<div class="col">
									<span>Harga/tahun</span>
									<?php foreach($jwt as $i => $jw) { if($jw == 'per Tahun') { $tahun = true; ?>
									<strong>Rp. {{ $harga[$i] }}</strong>
									<?php } } if(empty($tahun)) { ?>
									<strong>-</strong>
									<?php } $tahun = null; ?>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
	$(document).ready(function() {
		var nama_kost = '{{ $kost->nama_kost }}';
		var lokasi = '{{ $kost->lokasi_kost }}';
		var lat = '{{ $kost->latitude }}';
		var lng = '{{ $kost->longitude }}';
		function initialize() {
			var propertiPeta = {
				center:new google.maps.LatLng(lat,lng),
				zoom:18,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};

			var peta = new google.maps.Map(document.getElementById("maps"), propertiPeta);
			var marker=new google.maps.Marker({
				position: new google.maps.LatLng(lat,lng),
				map: peta,
				animation: google.maps.Animation.BOUNCE
			});

			var contentString = '<h6>' + nama_kost + '</h6><b>Lokasi: ' + lokasi + '</b>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});

			marker.addListener('click', function() {
				infowindow.open(peta, marker);
			});

		}

		google.maps.event.addDomListener(window, 'load', initialize);

		var x = navigator.geolocation;
		x.getCurrentPosition(success, failure);

		function success(position){
			var myLat = position.coords.latitude;
			var myLong = position.coords.longitude;

			var coords = new google.maps.LatLng(myLat, myLong);

			var mapOptions = {
				zoom: 14,
				center: coords,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}

			var map = new google.maps.Map(document.getElementById("map"), mapOptions);

			var marker = new google.maps.Marker({map: map, position: coords});
			var marker1 = new google.maps.Marker({
				position: new google.maps.LatLng(lat,lng),
				map: map,
				animation: google.maps.Animation.BOUNCE
			});

			var contentString = '<h6>' + nama_kost + '</h6><b>Lokasi: ' + lokasi + '</b>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			
			infowindow.open(map, marker1);
			marker1.addListener('click', function() {
				infowindow.open(map, marker1);
			});
		}

		function failure(){
			alert('geolocation failure!');
		}
	});
</script>
@endsection