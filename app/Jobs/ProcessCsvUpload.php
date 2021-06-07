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
            // Handle job...
            $data = array_map('str_getcsv', file($this->file));

            foreach ($data as $row) {
                $school = School::where('name',$row[2])->count();

                if($school < 1){
                    School::create([
                        'name' => $row[2]
                    ]);
                }

                Result::updateOrCreate([
                    'no_tes' => $row[1]
                ], [
                    'no_tes'              => $row[1],
                    'nama'                => $row[0],
                    'sekolah'             => $row[2],
                    'tanggal_tes'         => $row[3],
                    'jenis_kelamin'       => $row[4],
                    'tanggal_lahir'       => $row[5],
                    'umur'                => $row[6],
                    'iq'                  => $row[7],
                    'k_umum'              => $row[8],
                    'k_sosial'            => $row[9],
                    'k_verbal'            => $row[10],
                    'k_berhitung'         => $row[11],
                    'k_analisis'          => $row[12],
                    'k_spasial'           => $row[13],
                    'persepsi_bentuk'     => $row[14],
                    'k_penalaran'         => $row[15],
                    'konsentrasi'         => $row[16],
                    'daya_ingat'          => $row[17],
                    'k_memahami_masalah'  => $row[18],
                    'conventional'        => $row[19],
                    'enterprise'          => $row[20],
                    'social'              => $row[21],
                    'artistic'            => $row[22],
                    'investigative'       => $row[23],
                    'realistic'           => $row[24],
                    'tertinggi'           => $row[25],
                    'kedua'               => $row[26],
                    'ketiga'              => $row[27],
                    'kecenderungan'       => $row[28],
                    'orientasisatupersen' => $row[29],
                    'orientasiduapersen'  => $row[30],
                    'orientasitigapersen' => $row[31],
                    'rekom1'              => $row[32],
                    'rekom2'              => $row[33],
                    'pemeriksa'           => $row[34],
                    'id_pemeriksa'        => $row[35]
                ]);
            }
            info('done upload file:--'.$this->file);
            unlink($this->file);
    }
}
