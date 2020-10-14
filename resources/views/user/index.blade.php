@extends('user.template')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide mt-5 pt-5" style="margin-bottom: -10px;" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ asset('user/images/home1.png') }}" class="d-block w-100" height="450">
			<div class="carousel-caption d-none d-md-block">
				<h2 class="mt-0">Kost Sekitar Kampus UINAM</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="{{ asset('user/images/home2.png') }}" class="d-block w-100" height="450">
			<div class="carousel-caption d-none d-md-block">
				<h2 class="mt-0">Harga Terjangkau</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="{{ asset('user/images/home3.png') }}" class="d-block w-100" height="450">
			<div class="carousel-caption d-none d-md-block">
				<h2 class="mt-0">Banyak Pilihan Lokasi</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="py-5">
	<div class="container">
		<form class="row" method="POST" action="{{ url('kost/search') }}">
			{{ csrf_field() }}
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="select-wrap">
					<span class="icon icon-arrow_drop_down"></span>
					<select name="tipe_kost" id="offer-types" class="form-control d-block rounded-0" required="">
						<option value="">Tipe Kost</option>
						<option value="Kost Campuran">Kost Campuran</option>
						<option value="Kost Putri">Kost Putri</option>
						<option value="Kost Putra">Kost Putra</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="select-wrap">
					<span class="icon icon-arrow_drop_down"></span>
					<select name="jangkawaktu" id="offer-types" class="form-control d-block rounded-0" required="">
						<option value="">Jangka Waktu</option>
						<option value="per Minggu">per Minggu</option>
						<option value="per Bulan">per Bulan</option>
						<option value="per Tahun">per Tahun</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="mb-4">
					<div id="slider-range" class="border-primary"></div>
					<input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" required="">
					<input type="hidden" name="harga" id="harga">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<button type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" id="submit">Cari Kost</button>
			</div>

		</form>

		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					<span class="icon mr-3 flaticon-house"></span>
					<div class="text">
						<h2 class="mt-0">Kost Sekitar Kampus UINAM</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					<span class="icon mr-3 flaticon-rent"></span>
					<div class="text">
						<h2 class="mt-0">Harga Terjangkau</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					<span class="icon mr-3 flaticon-location"></span>
					<div class="text">
						<h2 class="mt-0">Banyak Pilihan Lokasi</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
						<div id="datakost"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>Rekomendasi Rumah Kost</h2>
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
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="site-pagination">
					@for($i = 1; $i<ceil($data_kost->total()/$data_kost->perPage())+1; $i++)
					@php
					if($data_kost->currentPage() == $i) $page = 'active';
					else $page = '';
					@endphp
					<a href="{{ url('/?page='.$i.'#datakost') }}" class="{{ $page }}">{{ $i }}</a>
					@endfor
				</div>
			</div>  
		</div>

	</div>
</div>
@endsection