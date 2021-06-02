<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('no_tes')->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('umur');
            $table->string('tanggal_lahir');
            $table->string('tanggal_tes');
            $table->string('sekolah');
            $table->string('iq');
            $table->string('k_umum');
            $table->string('k_sosial');
            $table->string('k_verbal');
            $table->string('k_berhitung');
            $table->string('k_analisis');
            $table->string('k_spasial');
            $table->string('persepsi_bentuk');
            $table->string('k_penalaran');
            $table->string('konsentrasi');
            $table->string('daya_ingat');
            $table->string('k_memahami_masalah');
            $table->double('conventional');
            $table->double('enterprise');
            $table->double('social');
            $table->double('artistic');
            $table->double('investigative');
            $table->double('realistic');
            $table->string('tertinggi');    
            $table->string('kedua');
            $table->string('ketiga');
            $table->string('kecenderungan');
            $table->string('orientasisatu');
            $table->string('orientasisatupersen');
            $table->text('karakteristiksatu');
            $table->string('orientasidua');
            $table->string('orientasiduapersen');
            $table->text('karakteristikdua');
            $table->string('orientasitiga');
            $table->string('orientasitigapersen');
            $table->text('karakteristiktiga');
            $table->string('rekom1');
            $table->string('rekom2');
            $table->string('pemeriksa');
            $table->string('id_pemeriksa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
