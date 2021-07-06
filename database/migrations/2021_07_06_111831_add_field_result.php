<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->string("inisiatif")->after("k_memahami_masalah");
            $table->string("komitmen_terhadap_tugas")->after("inisiatif");
            $table->string("daya_tahan_terhadap_stress")->after("komitmen_terhadap_tugas");
            $table->string("motivasi_berprestasi")->after("daya_tahan_terhadap_stress");
            $table->string("sistematika_kerja")->after("motivasi_berprestasi");
            $table->string("kemampuan_kerjasama")->after("sistematika_kerja");
            $table->string("sensitifitas")->after("kemampuan_kerjasama");
            $table->string("kepercayaan_diri")->after("sensitifitas");
            $table->string("penyesuaian_diri")->after("kepercayaan_diri");
            $table->string("kemandirian")->after("penyesuaian_diri");
            $table->string("stabilitas_emosional")->after("kemandirian");
            $table->string("kontrol_diri")->after("stabilitas_emosional");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropColumn("inisiatif");
            $table->dropColumn("komitmen_terhadap_tugas");
            $table->dropColumn("daya_tahan_terhadap_stress");
            $table->dropColumn("motivasi_berprestasi");
            $table->dropColumn("sistematika_kerja");
            $table->dropColumn("kemampuan_kerjasama");
            $table->dropColumn("sensitifitas");
            $table->dropColumn("kepercayaan_diri");
            $table->dropColumn("penyesuaian_diri");
            $table->dropColumn("kemandirian");
            $table->dropColumn("stabilitas_emosional");
            $table->dropColumn("kontrol_diri");
        });
    }
}
