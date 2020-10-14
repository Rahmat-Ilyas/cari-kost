@extends('owner.template')
@section('content')

@php
$id = Auth::user()->id;
$data = $owner->where('id', $id)->first();
@endphp

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title float-left">Lengkapi Data Kost Anda!</h4>

                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Owner</li>>
                    <li class="breadcrumb-item">Tambah Kost</li>
                </ol>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <form class="form-horizontal" role="form" method="POST" action="{{ url('owner/tambahkost') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-6">
                <div class="card-box">
                    <h1 class="m-t-0 header-title text-center">Data Kost</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Nama Kost</label>
                                    <div class="col-9">
                                        <input type="hidden" name="owner_id" value="{{ $id }}">
                                        <input type="text" name="nama_kost" class="form-control" required="" value="{{ old('nama_kost') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Tipe Kost</label>
                                    <div class="col-9">
                                        <select name="tipe_kost" class="form-control" required="">
                                            <option value="Kost Campuran">Kost Campuran</option>
                                            <option value="Kost Putri">Kost Putri</option>
                                            <option value="Kost Putra">Kost Putra</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Jangka Waktu</label>
                                    <div class="col-9">
                                        <select id="jangkawaktu" name="jangkawaktu[]" class="select2 form-control select2-multiple" multiple="multiple" multiple data-placeholder="Pilih jangka waktu" required="">
                                            <option value="per Minggu">per Minggu</option>
                                            <option value="per Bulan">per Bulan</option>
                                            <option value="per Tahun">per Tahun</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Harga Kost</label>
                                    <div class="col-3">
                                        <input type="number" id="hrminggu" name="hrminggu" class="form-control" readonly="">
                                        <span>/minggu</span>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" id="hrbulan" name="hrbulan" class="form-control" readonly="">
                                        <span>/bulan</span>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" id="hrtahun" name="hrtahun" class="form-control" readonly="">
                                        <span>/tahun</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Luas Kamar</label>
                                    <div class="col-3">
                                        <input type="text" name="luas_kamar" class="form-control" required="">
                                        <span>*M<sup>2</sup></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Fasilitas</label>
                                    <div class="col-3">
                                        <div class="checkbox checkbox-primary">
                                            <input name="fasilitas[]" id="wifi" value="Wi-Fi" type="checkbox">
                                            <label for="wifi">Wi-Fi</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="checkbox checkbox-primary">
                                            <input name="fasilitas[]" id="24jam" value="24 Jam" type="checkbox">
                                            <label for="24jam">24 Jam</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="checkbox checkbox-primary">
                                            <input name="fasilitas[]" id="wcdalam" value="WC Dalam" type="checkbox">
                                            <label for="wcdalam">WC Dalam</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-3">
                                        <div class="checkbox checkbox-primary">
                                            <input name="fasilitas[]" id="kasur" value="Kasur" type="checkbox">
                                            <label for="kasur">Kasur</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="checkbox checkbox-primary">
                                            <input name="fasilitas[]" id="kipas" value="Kipas" type="checkbox">
                                            <label for="kipas">Kipas</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="checkbox checkbox-primary">
                                            <input name="fasilitas[]" id="lemari" value="Lemari" type="checkbox">
                                            <label for="lemari">Lemari</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-3">
                                        <div class="checkbox checkbox-primary">
                                            <input id="lainnya" value="" type="checkbox">
                                            <label for="lainnya">Lainnya...</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" id="formlainnya" name="fasilitas[]" class="form-control" style="margin-top: -5px;" readonly="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Lokasi</label>
                                    <div class="col-9">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Atur Lokasi Kost</button>
                                        <span id="ket_lokasi">*lokasi belum diatur</span>
                                    </div>
                                </div>
                                <input type="hidden" id="lokasi_kost" name="lokasi_kost" required="">
                                <input type="hidden" id="longitude" name="longitude" required="">
                                <input type="hidden" id="latitude" name="latitude" required="">

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Deksripsi Kost</label>
                                    <div class="col-9">
                                        <textarea name="deksripsi" class="form-control" rows="5" required=""></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Gambar Kost</label>
                                    <div class="col-9">
                                        <input type="file" id="foto_1" name="foto_1" class="filestyle" data-placeholder="Foto 1" data-buttonname="btn-secondary" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-9">
                                        <input type="file" id="foto_2" name="foto_2" class="filestyle" data-placeholder="Foto 2" data-buttonname="btn-secondary" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-9">
                                        <input type="file" id="foto_3" name="foto_3" class="filestyle" data-placeholder="Foto 3" data-buttonname="btn-secondary" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-9">
                                        <input type="file" id="foto_4" name="foto_4" class="filestyle" data-placeholder="Foto 4" data-buttonname="btn-secondary" required="">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->

            <div class="col-6">
                <div class="card-box">
                    <h1 class="m-t-0 header-title text-center">Data Pemilik</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Nama Pemilik</label>
                                    <div class="col-9">
                                        <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Kontak</label>
                                    <div class="col-9">
                                        <input type="text" name="kt_telp_wa" class="form-control" required="" value="{{ $data->kt_telp_wa }}">
                                        <span>*Telepon/WhatsApp (Wajib di isi)</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-9">
                                        <input type="email" name="kt_email" class="form-control" value="{{ $data->kt_email }}">
                                        <span>*E-mail (Optional)</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-9">
                                        <input type="text" name="kt_fb" class="form-control" value="{{ $data->kt_fb }}">
                                        <span>*Facebook (Optional)</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-9">
                                        <input type="email" name="kt_ig" class="form-control" value="{{ $data->kt_ig }}">
                                        <span>*Instagram (Optional)</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Alamat Pemilik</label>
                                    <div class="col-9">
                                        <textarea name="alamat" class="form-control" rows="5" required="">{{ $data->alamat }}</textarea>
                                    </div>
                                </div>   

                                <div class="form-group row">
                                    <label class="col-3 col-form-label"></label>
                                    <div class="col-9">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ url('owner') }}" role="button" class="btn btn-danger">Batal</a>
                                    </div>
                                </div>                               
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
    </form>
    <!-- end row -->
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">Atur Lokasi Kost Anda!</h4>
            </div>
            <div class="modal-body">
                <div id="googleMap" class="gmaps"></div>
                <span class="text-info">Note: Pilih dan klik titik lokasi kost anda pada map</span>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="form-group row m-t-20">
                            <label class="col-3 col-form-label">Lokasi Kost</label>
                            <div class="col-9">
                             <textarea class="form-control" rows="4" id="set_lokasi_kost"></textarea>
                         </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-3 col-form-label">Longitude</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="set_longitude" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Latitude</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="set_latitude" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label"></label>
                        <div class="col-9">
                            <button type="submit" id="atur" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Atur</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
@endsection

@section('js')
<!-- Plugins -->
<script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('plugins/autocomplete/jquery.mockjax.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/autocomplete/countries.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/jquery.autocomplete.init.js') }}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKN8E3VeLkA5mgeENXiKp9tjhPlQ95TPc&callback=initMap"></script>
<script type="text/javascript" src="{{ asset('assets/js/map.js') }}"></script>

<!-- Init Js file -->
<script type="text/javascript" src="{{ asset('assets/pages/jquery.form-advanced.init.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#jangkawaktu').change(function() {
            $('.select2-selection__choice[title="per Minggu"]').addClass('perminggu');
            $('.select2-selection__choice[title="per Bulan"]').addClass('perbulan');
            $('.select2-selection__choice[title="per Tahun"]').addClass('pertahun');

            $('#hrminggu').attr('readonly', true);
            $('#hrbulan').attr('readonly', true);
            $('#hrtahun').attr('readonly', true);

            $('#hrminggu').removeAttr('required');
            $('#hrbulan').removeAttr('required');
            $('#hrtahun').removeAttr('required');

            ($('.select2-selection__rendered').find('.perminggu')).each(function() {
                $('#hrminggu').removeAttr('readonly');
                $('#hrminggu').attr('required', '');
            });

            ($('.select2-selection__rendered').find('.perbulan')).each(function() {
                $('#hrbulan').removeAttr('readonly');
                $('#hrbulan').attr('required', '');
            });

            ($('.select2-selection__rendered').find('.pertahun')).each(function() {
                $('#hrtahun').removeAttr('readonly');
                $('#hrtahun').attr('required', '');
            });
        });

        $('#lainnya').click(function() {
            if ($('#lainnya').is(':checked')) {
                $('#formlainnya').removeAttr('readonly');
                $('#formlainnya').focus();
            } else {
                $('#formlainnya').attr('readonly', 'on');
            }
        });

        $('#atur').click(function() {
            var lokasi_kost = $('#set_lokasi_kost').val();
            var longitude = $('#set_longitude').val();
            var latitude = $('#set_latitude').val();

            $('#lokasi_kost').val(lokasi_kost);
            $('#longitude').val(longitude);
            $('#latitude').val(latitude);
            $('#ket_lokasi').html(lokasi_kost);
        });

        $('#foto_1').change(function() {
            if (typeof($('#foto_1')[0].files) != 'undefined') {
                var size = parseFloat($('#foto_1')[0].files[0].size/1024).toFixed(2);
                if (size > 2048) {
                    alert('Ukuran gambar terlalu besar!');
                    $('#foto_1').val(null);
                }
            }
            else {
                alert('Browser tidak mendukung HTML5');
            }
        });

        $('#foto_2').change(function() {
            if (typeof($('#foto_2')[0].files) != 'undefined') {
                var size = parseFloat($('#foto_2')[0].files[0].size/1024).toFixed(2);
                if (size > 2048) {
                    alert('Ukuran gambar terlalu besar!');
                    $('#foto_2').val(null);
                }
            }
            else {
                alert('Browser tidak mendukung HTML5');
            }
        });

        $('#foto_3').change(function() {
            if (typeof($('#foto_3')[0].files) != 'undefined') {
                var size = parseFloat($('#foto_3')[0].files[0].size/1024).toFixed(2);
                if (size > 2048) {
                    alert('Ukuran gambar terlalu besar!');
                    $('#foto_3').val(null);
                }
            }
            else {
                alert('Browser tidak mendukung HTML5');
            }
        });

        $('#foto_4').change(function() {
            if (typeof($('#foto_4')[0].files) != 'undefined') {
                var size = parseFloat($('#foto_4')[0].files[0].size/1024).toFixed(2);
                if (size > 2048) {
                    alert('Ukuran gambar terlalu besar!');
                    $('#foto_4').val(null);
                }
            }
            else {
                alert('Browser tidak mendukung HTML5');
            }
        });
    });
</script>
@endsection