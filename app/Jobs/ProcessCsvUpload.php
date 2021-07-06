<?php

namespace App\Jobs;

use App\Models\Result;
use App\Models\School;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class ProcessCsvUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $file;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = array_map('str_getcsv', file($this->file));

        foreach ($data as $row) {
            $school = School::where('name', $row[2])->count();

            if ($school < 1) {
                School::create([
                    'name' => $row[2]
                ]);
            }
            if (Result::where('no_tes', $row[1])->count() == 0) {
                Result::create([

                    'no_tes'                     => $row[1],
                    'nama'                       => $row[0],
                    'sekolah'                    => $row[2],
                    'tanggal_tes'                => $row[3],
                    'jenis_kelamin'              => $row[4],
                    'tanggal_lahir'              => $row[5],
                    'umur'                       => $row[6],
                    'iq'                         => $row[7],
                    'k_umum'                     => $row[8],
                    'k_sosial'                   => $row[9],
                    'k_verbal'                   => $row[10],
                    'k_berhitung'                => $row[11],
                    'k_analisis'                 => $row[12],
                    'k_spasial'                  => $row[13],
                    'persepsi_bentuk'            => $row[14],
                    'k_penalaran'                => $row[15],
                    'konsentrasi'                => $row[16],
                    'daya_ingat'                 => $row[17],
                    'k_memahami_masalah'         => $row[18],
                    'inisiatif'                  => $row[19],
                    'komitmen_terhadap_tugas'    => $row[20],
                    'daya_tahan_terhadap_stress' => $row[21],
                    'motivasi_berprestasi'       => $row[22],
                    'sistematika_kerja'          => $row[23],
                    'kemampuan_kerjasama'        => $row[24],
                    'sensitifitas'               => $row[25],
                    'kepercayaan_diri'           => $row[26],
                    'penyesuaian_diri'           => $row[27],
                    'kemandirian'                => $row[28],
                    'stabilitas_emosional'       => $row[29],
                    'kontrol_diri'               => $row[30],
                    'conventional'               => $row[31],
                    'enterprise'                 => $row[32],
                    'social'                     => $row[33],
                    'artistic'                   => $row[34],
                    'investigative'              => $row[35],
                    'realistic'                  => $row[36],
                    'tertinggi'                  => $row[37],
                    'kedua'                      => $row[38],
                    'ketiga'                     => $row[39],
                    'kecenderungan'              => $row[40],
                    'orientasisatupersen'        => $row[41],
                    'orientasiduapersen'         => $row[42],
                    'orientasitigapersen'        => $row[43],
                    'rekom1'                     => $row[44],
                    'rekom2'                     => $row[45],
                    'pemeriksa'                  => 0,
                    'id_pemeriksa'               => 0
                ]);
            }
        }
        info('done upload file:--' . $this->file);
        unlink($this->file);
    }
}
