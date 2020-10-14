@extends('user.template')
@section('content')
<div class="site-section site-section-sm bg-light pt-5" style="margin-top: 100px;">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>Hasil Pencarian</h2>
				</div>
			</div>
		</div>
		<div class="row mb-5">
			@php $j = 0 @endphp
			@foreach($data_kost as $dta)
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
			@php $j++ @endphp
			@endforeach

			@if($j <= 0)
			<div class="col-12 text-center">
				<h2><i>Tidak ada kost yang ditemukan</i></h2>
			</div>
			@endif
		</div>
	</div>
	<hr>
</div>


<div class="site-section site-section-sm bg-light" style="margin-top: -60px;">
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
<script>
	window.history.pushState('','','/');
</script>
@endsection