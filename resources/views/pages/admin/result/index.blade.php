@extends('layouts.app')

@section('title_page')
Hasil Ujian
@endsection

@section('styles_page')
<!-- Custom styles for this page -->
<link href="{{ asset('assets-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/sweetalert2/dist/sweetalert2.min.css') }}">
<link href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">

@endsection

@section('content')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Hasil Ujian</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Download </label>
                <div class="col-sm-9">
                    <select id="download_type" class="form-control">
                        <option disabled selected value="">--PILIH--</option>
                        <option value="school"> Berdasarkan Sekolah </option>
                        <option value="student"> Perorangan </option>
                    </select>
                </div>
            </div>
            <!-- select schooll -->
            <div id="select_school">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sekolah </label>
                    <div class="col-sm-5">
                        <select class="form-control select2school" style="width: 100%;">
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-danger"> <i class="fa fa-download"></i> Download </button>
                    </div>
                </div>

            </div>
            <!-- end select school -->

            <!-- select student -->
            <div id="select_student">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Perorangan </label>
                    <div class="col-sm-5">
                        <select class="form-control select2school" style="width: 100%;">
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-danger"> <i class="fa fa-download"></i> Download </button>
                    </div>
                </div>
            </div>
            <!-- end select student -->

            <br><br>
            <table class="table table-bordered table-hover" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Sekolah</th>
                        <th width="150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts_page')
<!-- Page level plugins -->
<script src="{{ asset('assets-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets-admin/vendor/datatables/dataTables.bootstrap4.min.js') }} "></script>

<!-- Page level custom scripts -->
<script src="{{ asset('plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#select_school').hide();
        $('#select_student').hide();
    });

    $('#download_type').change(function() {
        value = $(this).val();
        if (value == "school") {
            select2School("select2school", "{{ url('autocomplete/school') }}");
            $('#select_student').slideUp();
            $('#select_school').slideDown('slow');

        }else if(value == "student"){
            $('#select_school').slideUp();
            $('#select_student').slideDown('slow');
        }
    });
</script>
@endsection