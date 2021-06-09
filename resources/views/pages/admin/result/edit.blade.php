<form class="forms" data-url="{{ url('result/'.$data->id) }}" method="POST">
    <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> @lang('main.form.edit')</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    </div>
    <div class="modal-body">
        <div class="errors"></div>

        @csrf
        @method('PUT')

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Data Diri</a>
                <a class="nav-item nav-link" id="nav-kemampuan-tab" data-toggle="tab" href="#nav-kemampuan" role="tab" aria-controls="nav-kemampuan" aria-selected="false">Kemampuan</a>
                <a class="nav-item nav-link" id="nav-minatstudi-tab" data-toggle="tab" href="#nav-minatstudi" role="tab" aria-controls="nav-minatstudi" aria-selected="false">Minat Studi</a>
                <a class="nav-item nav-link" id="nav-rekomendasi-tab" data-toggle="tab" href="#nav-rekomendasi" role="tab" aria-controls="nav-rekomendasi" aria-selected="false">Rekomendasi</a>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent" style="margin-top: 15px;">
            <!-- data diri -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor tes </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="no_tes" value="{{ $data->no_tes }}" >
                    </div>
                    <label class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" >
                    </div>
                    <label class="col-sm-2 col-form-label">Umur </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="umur" value="{{ $data->umur }}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" >
                    </div>
                    <label class="col-sm-2 col-form-label">Tanggal Tes </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tanggal_tes" value="{{ $data->tanggal_tes }}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sekolah </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="sekolah" value="{{ $data->sekolah }}" >
                    </div>
                    <label class="col-sm-1 col-form-label">IQ </label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="iq" value="{{ $data->iq }}" >
                    </div>
                </div>

            </div>
            <!-- end data diri -->

            <!-- Kemampuan -->
            <div class="tab-pane fade" id="nav-kemampuan" role="tabpanel" aria-labelledby="nav-kemampuan-tab">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> Umum </label>
                    <div class="col-sm-4">
                        <select id="kemampuan_umum" class="form-control" name="k_umum">
                            <option value="A5">Sangat Baik</option>
                            <option value="A4">Baik</option>
                            <option value="A3">Cukup</option>
                            <option value="A2">Kurang</option>
                            <option value="A1">Sangat Kurang</option>
                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label">Sosial </label>
                    <div class="col-sm-4">
                        <select id="k_sosial" class="form-control" name="k_sosial">
                            <option value="B5">Sangat Baik</option>
                            <option value="B4">Baik</option>
                            <option value="B3">Cukup</option>
                            <option value="B2">Kurang</option>
                            <option value="B1">Sangat Kurang</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> Verbal </label>
                    <div class="col-sm-4">
                        <select id="k_verbal" class="form-control" name="k_verbal">
                            <option value="C5">Sangat Baik</option>
                            <option value="C4">Baik</option>
                            <option value="C3">Cukup</option>
                            <option value="C2">Kurang</option>
                            <option value="C1">Sangat Kurang</option>
                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label">Berhitung </label>
                    <div class="col-sm-4">
                        <select id="k_berhitung" class="form-control" name="k_berhitung">
                            <option value="D5">Sangat Baik</option>
                            <option value="D4">Baik</option>
                            <option value="D3">Cukup</option>
                            <option value="D2">Kurang</option>
                            <option value="D1">Sangat Kurang</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> Analisis Sintetis </label>
                    <div class="col-sm-4">
                        <select id="k_analisis" class="form-control" name="k_analisis">
                            <option value="E5">Sangat Baik</option>
                            <option value="E4">Baik</option>
                            <option value="E3">Cukup</option>
                            <option value="E2">Kurang</option>
                            <option value="E1">Sangat Kurang</option>
                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label">Spasial(Pandang Ruang) </label>
                    <div class="col-sm-4">
                        <select id="k_spasial" class="form-control" name="k_spasial">
                            <option value="F5">Sangat Baik</option>
                            <option value="F4">Baik</option>
                            <option value="F3">Cukup</option>
                            <option value="F2">Kurang</option>
                            <option value="F1">Sangat Kurang</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> Persepsi Bentuk </label>
                    <div class="col-sm-4">
                        <select id="persepsi_bentuk" class="form-control" name="persepsi_bentuk">
                            <option value="G5">Sangat Baik</option>
                            <option value="G4">Baik</option>
                            <option value="G3">Cukup</option>
                            <option value="G2">Kurang</option>
                            <option value="G1">Sangat Kurang</option>
                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label">Penalaran / Analisis Logis </label>
                    <div class="col-sm-4">
                        <select id="k_penalaran" class="form-control" name="k_penalaran">
                            <option value="H5">Sangat Baik</option>
                            <option value="H4">Baik</option>
                            <option value="H3">Cukup</option>
                            <option value="H2">Kurang</option>
                            <option value="H1">Sangat Kurang</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> Konsentrasi </label>
                    <div class="col-sm-4">
                        <select id="konsentrasi" class="form-control" name="konsentrasi">
                            <option value="I5">Sangat Baik</option>
                            <option value="I4">Baik</option>
                            <option value="I3">Cukup</option>
                            <option value="I2">Kurang</option>
                            <option value="I1">Sangat Kurang</option>
                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label">Daya Ingat </label>
                    <div class="col-sm-4">
                        <select id="daya_ingat" class="form-control" name="daya_ingat">
                            <option value="J5">Sangat Baik</option>
                            <option value="J4">Baik</option>
                            <option value="J3">Cukup</option>
                            <option value="J2">Kurang</option>
                            <option value="J1">Sangat Kurang</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"> Memahami Masalah </label>
                    <div class="col-sm-7">
                        <select id="k_memahami_masalah" class="form-control" name="k_memahami_masalah">
                            <option value="K5">Sangat Baik</option>
                            <option value="K4">Baik</option>
                            <option value="K3">Cukup</option>
                            <option value="K2">Kurang</option>
                            <option value="K1">Sangat Kurang</option>
                        </select>
                    </div>
                </div>

            </div>
            <!-- end kemampuan -->

            <!-- Minat Studi -->
            <div class="tab-pane fade" id="nav-minatstudi" role="tabpanel" aria-labelledby="nav-minatstudi-tab">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Conventional </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="conventional" value="{{ $data->conventional }}">
                    </div>
                    <label class="col-sm-2 col-form-label">Enterprise </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="enterprise" value="{{ $data->enterprise }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Social </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="social" value="{{ $data->social }}">
                    </div>
                    <label class="col-sm-2 col-form-label">Artistic </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="artistic" value="{{ $data->artistic }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Investigative </label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="investigative" value="{{ $data->investigative }}">
                    </div>
                    <label class="col-sm-2 col-form-label">Realistic </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="realistic" value="{{ $data->realistic }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tertinggi </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tertinggi" value="{{ $data->tertinggi }}">
                    </div>
                    <label class="col-sm-2 col-form-label">Kedua </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="kedua" value="{{ $data->kedua }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ketiga </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="ketiga" value="{{ $data->ketiga }}">
                    </div>
                    <label class="col-sm-2 col-form-label">Kecenderungan </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="kecenderungan" value="{{ $data->kecenderungan }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Orientasi satu persen </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="orientasisatupersen" value="{{ $data->orientasisatupersen }}">
                    </div>
                    <label class="col-sm-2 col-form-label">Orientasi dua persen </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="orientasiduapersen" value="{{ $data->orientasiduapersen }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Orientasi tiga persen </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="orientasitigapersen" value="{{ $data->orientasitigapersen }}">
                    </div>
                </div>

            </div>
            <!-- end Minat Studi -->

            <!-- rekomendasi -->
            <div class="tab-pane fade" id="nav-rekomendasi" role="tabpanel" aria-labelledby="nav-rekomendasi-tab">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Rekom 1 </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="rekom1" value="{{ $data->rekom1 }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Rekom 2 </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="rekom2" value="{{ $data->rekom2 }}">
                    </div>
                </div>

            </div>
            <!-- end rekomendasi -->
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-reply-all"></i> @lang('main.button.cancel')</button>
        <button type="submit" class="btn btn-success "> <i class="fa fa-paper-plane"></i> @lang('main.button.edit')</button>
    </div>
</form>


<script>
    $('#kemampuan_umum').val("{{ $data->k_umum }}");
    $('#k_sosial').val("{{ $data->k_sosial }}");
    $('#k_verbal').val("{{ $data->k_verbal }}");
    $('#k_berhitung').val("{{ $data->k_berhitung }}");
    $('#k_analisis').val("{{ $data->k_analisis }}");
    $('#k_spasial').val("{{ $data->k_spasial }}");
    $('#persepsi_bentuk').val("{{ $data->persepsi_bentuk }}");
    $('#k_penalaran').val("{{ $data->k_penalaran }}");
    $('#konsentrasi').val("{{ $data->konsentrasi }}");
    $('#daya_ingat').val("{{ $data->daya_ingat }}");
    $('#k_memahami_masalah').val("{{ $data->k_memahami_masalah }}");
</script>