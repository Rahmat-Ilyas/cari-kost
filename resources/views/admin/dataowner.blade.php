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
				<h4 class="page-title float-left">Data Owner</h4>

				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item">Admin</li>
					<li class="breadcrumb-item">Data Owner</li>
				</ol>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- end row -->


	<div class="row">
		<div class="col-md-12">
			<div class="card-box table-responsive">
				<h4 class="m-t-0 header-title"><b>Data Owner</b></h4>
				<table id="datatable" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Foto</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Username</th>
							<th>Email</th>
							<th>Telpon/WA</th>
							<th>Facebook</th>
							<th>Instagram</th>
						</tr>
					</thead>

					<tbody>
						@php
						$no = 1;
						@endphp
						@foreach($owner as $dta)
						<tr>
							<td>{{ $no}}</td>
							<td>
								<img src="{{ asset('images/foto_user/'.$dta->foto) }}" height="50" class="p-0">
							</td>
							<td>{{ $dta->nama }}</td>
							<td>{{ $dta->alamat }}</td>
							<td>{{ $dta->username }}</td>
							<td>{{ $dta->kt_email }}</td>
							<td>{{ $dta->kt_telp_wa }}</td>
							<td>{{ $dta->kt_fb ? $dta->kt_fb : '-'}}</td>
							<td>{{ $dta->kt_ig ? $dta->kt_ig : '-'}}</td>
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