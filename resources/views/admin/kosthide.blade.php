@extends('admin.template')

@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<h4 class="page-title float-left">Data Kost</h4>

				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item">Admin</li>
					<li class="breadcrumb-item">Data Kost</li>
				</ol>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- end row -->


	<div class="row">
		<div class="col-md-12">
			<div class="card-box table-responsive">
				<h4 class="m-t-0 header-title"><b>Kost Disembunyikan</b></h4>
				<table id="datatable" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kost</th>
							<th>Nama Pemilik</th>
							<th>Tipe Kost</th>
							<th>Luas Kamar</th>
							<th>Lokasi Kost</th>
						</tr>
					</thead>

					<tbody>
						@php
						$no = 1;
						@endphp
						@foreach($kost as $dta)
						@php
						$dto = $owner->where('id', $dta->owner_id)->first();
						@endphp
						<tr>
							<td>{{ $no}}</td>
							<td>{{ $dta->nama_kost }}</td>
							<td>{{ $dto->nama }}</td>
							<td>{{ $dta->tipe_kost }}</td>
							<td>{{ $dta->luas_kamar }} m<sup>2</sup></td>
							<td>{{ $dta->lokasi_kost }}</td>
						</tr>
						@php
						$no++;
						@endphp
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- end row -->

</div>
@endsection

@section('js')
<!-- Required datatable js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#datatable').DataTable();
		var table = $('#datatable-buttons').DataTable({
			lengthChange: false,
			buttons: ['copy', 'excel', 'pdf', 'colvis']
		});
		table.buttons().container()
		.appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
	});
</script>
@endsection