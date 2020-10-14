@extends('owner.template')

@section('css')
<link href="{{ asset('plugins/jquery-toastr/jquery.toast.min.css') }}" rel="stylesheet" />
<link href="{{ asset('plugins/slick-slider/slick.css') }}" rel="stylesheet" />
<link href="{{ asset('plugins/slick-slider/slick-theme.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title float-left">Data Kost</h4>

                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Owner</li>>
                    <li class="breadcrumb-item">Data Kost</li>
                </ol>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    @php
    $id = Auth::user()->id;
    $data_kost = $kost->where('owner_id', $id)->where('status', '!=', 'delete');
    @endphp

    <input type="hidden" id="owner_id" value="{{ $id }}">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Kost yang telah ditambah</h4>
                <div class="row">
                    @foreach($data_kost as $i => $dta)
                    <div class="col-md-6">
                        <div class="card m-b-30">
                            <div class="single-item slider">
                                <div>
                                    <img src="{{ asset('images/foto_kost/'.$dta->foto_1) }}" style="height: 300px;" alt="img-1" class="card-img-top img-fluid">
                                </div>
                                <div>
                                    <img src="{{ asset('images/foto_kost/'.$dta->foto_2) }}" style="height: 300px;" alt="img-2" class="card-img-top img-fluid">
                                </div>
                                <div>
                                    <img src="{{ asset('images/foto_kost/'.$dta->foto_3) }}" style="height: 300px;" alt="img-3" class="card-img-top img-fluid">
                                </div>
                                <div>
                                    <img src="{{ asset('images/foto_kost/'.$dta->foto_4) }}" style="height: 300px;" alt="img-4" class="card-img-top img-fluid">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title">{{ $dta->nama_kost }}</h4>
                                <h5 class="card-title">#{{ $dta->tipe_kost }}</h5>
                                <a href="#" class="btn btn-info waves-effect waves-light detail" data-toggle="modal" data-target=".bs-example-modal-lg{{ $dta->id }}"><i class="fa fa-info-circle"></i>&nbsp;Detail</a>
                                <a href="{{ url('owner/updatekost/'.$dta->id) }}" class="btn btn-primary waves-effect waves-light"><i class="fa fa-pencil"></i>&nbsp;Update</a>
                                @if($dta->status == 'view')
                                <a href="#" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#myModal{{ $dta->id }}"><i class="fa fa-eye-slash"></i>&nbsp;Sembunikan</a>
                                @elseif($dta->status == 'hide')
                                <a href="{{ url('owner/hidenorview/'.$dta->id) }}" class="btn btn-success waves-effect waves-light"><i class="fa fa-eye"></i>&nbsp;Tampilkan</a>
                                @endif
                                <a href="#" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#modalhapus{{ $dta->id }}"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                            </div>
                        </div>
                    </div>

                    <div id="modalhapus{{ $dta->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Hapus Iklan</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin ingin menghapus iklan kost <i>"{{ $dta->nama_kost }}"</i>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
                                    <a href="{{ url('owner/hapuskost/'.$dta->id) }}" role="button" class="btn btn-danger waves-effect waves-light">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="myModal{{ $dta->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Sembunyikan Iklan</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Data kost tidak akan di tampilkan di beranda, pengunjung tidak dapat melihat kost anda. Yakin ingin melanjutkan?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
                                    <a href="{{ url('owner/hidenorview/'.$dta->id) }}" role="button" class="btn btn-warning waves-effect waves-light">Lanjutkan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bs-example-modal-lg{{ $dta->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myLargeModalLabel">{{ $dta->nama_kost }}</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="map{{ $dta->id }}" class="gmaps"></div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row m-t-20">
                                                <label class="col-3 col-form-label">Nama Kost</label>
                                                <div class="col-9">
                                                 <input type="text" class="form-control" id="nama_kost" disabled="" value="{{ $dta->nama_kost }}">
                                             </div>
                                         </div>

                                         <div class="form-group row">
                                            <label class="col-3 col-form-label">Tipe Kost</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="tipe_kost" disabled="" value="{{ $dta->tipe_kost }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Jangka Waktu (Harga)</label>
                                            <div class="col-9">
                                                @php
                                                $jw = explode(', ', $dta->jangkawaktu);
                                                $hr = explode(', ', $dta->harga_kost);

                                                foreach ($jw as $i => $val) {
                                                    $dta_jw_hr[] = $val." (Rp. ".$hr[$i].")";
                                                }
                                                $jw_hr = implode(', ', $dta_jw_hr);
                                                unset($dta_jw_hr);
                                                @endphp
                                                <input type="text" class="form-control" id="jangkawaktu" disabled="" value="{{ $jw_hr }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Luas Kamar</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="jangkawaktu" disabled="" value="{{ $dta->luas_kamar }} M2">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Fasilitas</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="jangkawaktu" disabled="" value="{{ $dta->fasilitas }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Lokasi Kost</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="jangkawaktu" disabled="" value="{{ $dta->lokasi_kost }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Dekskripsi</label>
                                            <div class="col-9">
                                                <textarea name="" disabled="" class="form-control">{{ $dta->deksripsi }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label"></label>
                                            <div class="col-9">
                                                <button type="submit" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @if(!isset($i))
            <h2 class="text-center"><i>Belum ada kost yang ditambahkan</i></h2>
            @endif
            <div hidden="" id="map" class="gmaps"></div>
        </div>
    </div>
</div>
</div>
@endsection

@section('js')
<!-- Slick Slider js -->

<!-- Toastr js -->
<script src="{{ asset('plugins/jquery-toastr/jquery.toast.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/jquery.toastr.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/slick-slider/slick.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/jquery.slider.init.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKN8E3VeLkA5mgeENXiKp9tjhPlQ95TPc&callback=initMap"></script>
<script>
    $(document).ready(function() {

        @if(session('msg'))
        $.toast({
            heading: 'Berhasil!',
            text: "{{ session('msg') }}",
            position: 'top-right',
            loaderBg: '#5ba035',
            icon: 'success',
            hideAfter: 3000,
            stack: 1
        }); 
        @endif

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
        });

        var owner_id = $('#owner_id').val();

        $.ajax({
            url         : "{{ url('/owner/getdatakost') }}",
            method      : "POST",
            dataType    : "JSON",
            data        : { owner_id : owner_id, req : 'this_owner' },
            success     : function(data) {
                $.each(data.datakost, function(i, val) {
                    console.log(val.id);
                    var lng = val.longitude;
                    var lat = val.latitude;
                    var lokasi = val.lokasi_kost;
                    var nama_kost = val.nama_kost;

                    function initialize() {
                      var propertiPeta = {
                        center:new google.maps.LatLng(lat,lng), 
                        zoom:18,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var peta = new google.maps.Map(document.getElementById("map"+val.id), propertiPeta);
                    var marker = new google.maps.Marker({
                      position: new google.maps.LatLng(lat,lng),
                      map: peta
                  });

                    var contentString = '<h6>' + nama_kost + '</h6><b>Lokasi: ' + lokasi + '</b>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    infowindow.open(peta, marker);
                }

                google.maps.event.addDomListener(window, 'load', initialize);


            });
            }
        });

        google.maps.event.addDomListener(window, 'load', initialize);

    });
</script>
@endsection