@extends('layouts.app')

@section('title_page')
Import Data
@endsection

@section('content')
<div class="container-fluid">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="header">
                    <strong>
                        <ol>
                            <li> File Maks 1024 kilobytes (1 MB)</li>
                            <li> Setelah Berhasil Import Data, System akan memproses data secara berkala silahkan cek di menu dashboard untuk memastikan </li>
                            <li> Data dengan NIS yang sama akan terlewati/skip otomatis </li>
                            <li> Import File sesuai contoh File yang ditentukan </li>
                        </ol>
                    </strong>
                </div>
            </div>
        </div>
    </div>




    <div class="col-xl-12 col-lg-12">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ url('import-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label class="col-sm-1 col-form-label">File Hasil </label>

                        <div class="col-xl-4 col-lg-4">

                            <input type="file" class="form-control-file" name="file_import" accept=".csv">

                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Upload File"><i class="fa fa-upload"></i> Upload</button>
                        </div>

                        <div class="col-xl-5 col-lg-5 ">
                            <button type="button" id="btn-download" class="btn btn-success" data-toggle="tooltip" title="Contoh File" style="float: right;"><i class="fa fa-file-excel"></i> Download Contoh Excel</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_page')

<script src="{{ asset('js/main.js') }}"></script>

@endsection

@section('js')
<script>
    $('#btn-download').click(function() {
        window.open("{{ url('download-example-excel-new') }}");
    });
</script>
@endsection