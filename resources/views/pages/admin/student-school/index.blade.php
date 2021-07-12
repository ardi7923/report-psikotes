@extends('layouts.app')

@section('title_page')
Download Hasil Ujian
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
        <h6 class="m-0 font-weight-bold text-primary">Download Hasil Ujian</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if($total_student < 300) <a href="{{ url('report-result?type=multiple&school_name='.Auth::user()->school->name) }}" target="_blank">
                <button class="btn btn-danger"> <i class="fa fa-file-pdf"></i> Download Semua</button>
                </a>
                @else
                <button class="btn btn-danger" id="download-bypart" data-url="{{ url('result-bypart/'.Auth::user()->school->name) }}"> <i class="fa fa-file-pdf"></i> Download Semua</button></button>
                @endif
                <a href="{{ url('export-excel-rekap?school_name='.Auth::user()->school->name) }}" target="_blank">
                    <button class="btn btn-success"> <i class="fa fa-file-excel"></i> Download Rekap Excel</button>
                </a>
                <br><br>
                <table class="table table-bordered table-hover" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="50px">No</th>
                            <th>Nomor Tes</th>
                            <th>Nama</th>
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


@include('snippets.modal')

@stop

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

<script type="text/javascript">
    $(document).ready(function() {

        var table = $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url("student-school") }}',
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'no_tes'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'sekolah'
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });

    $("#download-bypart").click(showForm);

</script>
@endsection