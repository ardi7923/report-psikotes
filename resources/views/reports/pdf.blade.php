<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cetak Laporan </title>
    <script src="{{ asset('assets-report/chartjs/Chart.js') }}"></script>

    <script>
        // wkhtmltopdf 0.12.5 crash fix.
        // https://github.com/wkhtmltopdf/wkhtmltopdf/issues/3242#issuecomment-518099192
        'use strict';
        (function(setLineDash) {
            CanvasRenderingContext2D.prototype.setLineDash = function() {
                if (!arguments[0].length) {
                    arguments[0] = [1, 0];
                }
                // Now, call the original method
                return setLineDash.apply(this, arguments);
            };
        })(CanvasRenderingContext2D.prototype.setLineDash);
        Function.prototype.bind = Function.prototype.bind || function(thisp) {
            var fn = this;
            return function() {
                return fn.apply(thisp, arguments);
            };
        };
    </script>

    <script>
        function drawGraphs() {
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'horizontalBar',

                data: {

                    labels: ["Conventional", "enterprise", "social", "artistic", "investigative", "realistic", ],
                    datasets: [{
                        label: 'Nilai',
                        data: [
                            "{{$data->conventional}}",
                            "{{$data->enterprise}}",
                            "{{$data->social}}",
                            "{{$data->artistic}}",
                            "{{$data->investigative}}",
                            "{{$data->realistic}}"
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderWidth: 1,
                        backgroundColor: "#413684",
                    }]
                },
                options: {

                    scales: {
                        xAxes: [{
                            ticks: {
                                display: true,
                                beginAtZero: true,
                                max: 100,
                                toolTip: false,
                                fontSize: 12
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,

                            },
                            ticks: {
                                fontSize: 12,
                            }
                        }]
                    }
                }
            });
        }

        window.onload = function() {
            drawGraphs();
        };
    </script>

    <style>
        .reportGraph {
            width: 850px
        }

        body {

            background-color: white;

        }

        .tableb,
        .tableb th,
        .tableb td {
            padding: 8px 20px;
            text-align: center;
            border: 10px solid #eeeeee;
        }

        tbody td {
            padding: 3px;
        }

        .spasi {
            padding: 5px;
            background-color: #dcdcdc;
        }

        #kepala {
            background-color: #011b47;
            color: white;
        }

        #kepalabawah {
            background-color: black;
            color: white;
            text-align: center;
        }

        .rowsatua {
            background-color: #0651cd !important;
            color: white !important;
        }

        .bodypenjelasan {
            background-color: #ec1625;
            color: white;
        }

        .rowsatub {
            background-color: #0651cd;
            color: white;
        }

        .rowduaa {
            background-color: #f80968;
            color: white;
        }

        .rowduaa {
            background-color: #f80968;
            color: white;
        }

        .rowtigaa {
            background-color: #f80968;
            color: white;
        }

        .rowtigac {
            background-color: #f80968;
            color: white;
        }

        .bg-grey {
            background-color: #dcdcdc;
        }

        .bg-blue {
            background-color: #0080b3;
        }

        .pt-1 {
            padding-top: 10px;
        }

        .pl-10 {
            padding-left: 10px;
        }


        /* Text align */
        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        /* text decoration */
        .text-bold {
            font-weight: bold;
        }

        /* text color  */
        .color-blue {
            color: #0080b3;
        }


        .container-widget {
            padding: 10px;
        }

        div.page {
            /* page-break-after: always; */
            page-break-inside: avoid;
        }

        .tes-image {
            filter: brightness(0) invert(1);
        }
    </style>

</head>

<body>
    <div class="container-fluid" style='margin: 0 50px 10px 50px ;background-color:white;'>
        <div class="page">

            <center><img src="{{ asset(company_get('logo')) }}" width="200px" height="60px"></center><br>
            <center>
                <h1 class="color-blue" style="margin-top: -5px;"> <strong> PEMERIKSAAN PSIKOLOGIS</strong></h1>
            </center>
            <hr style="color: black; border: 3px solid black; margin-top: -18px;">
            <div class="row" style="margin-bottom:20px">
                <table>
                    <tbody>

                        <tr>
                            <td rowspan="5" width="150px">
                                <div style="text-align:center;text-align:right"><img src="{{ asset('assets-report/nama.png') }}" width="90px"></div>
                            </td>

                        </tr>
                        <tr>
                            <td rowspan="5" style="padding-left: 15px;">
                                <div style="text-align:left;color:#0080b3;font-weight:bold; width:200px; margin-bottom:5px; vertical-align: top;"> {{ $data->nama }} </div>
                                <div style="text-align:left;color:#0080b3;font-weight:bold; width:200px;margin-bottom:5px; vertical-align: top;"> {{ $data->jenis_kelamin }} </div>
                            </td>
                        </tr>


                        <tr class="color-blue" >

                            <td></td>
                            <td style="padding-top: 20px;">Tanggal Tes </td>
                            <td style="padding-top: 20px;">: {{ $data->tanggal_tes }} </td>
                        </tr>
                        <tr class="color-blue">
                            <td></td>
                            <td style="width: 150px;">Sekolah</td>
                            <td style="width: 550px;">: {{ $data->sekolah }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h5 style="padding:5px;background-color:#0e81c4;color:white;width:408px; margin-top: -10px; font-weight: bold; font-size: 16;">IQ = {{ $data->iq }} ({{ iq_description($data->iq) }} menurut IST)
            </h5>
            <img src="{{ (asset('assets-report/judul.jpg'))}}" width="300px" style="margin-top: -20px; margin-bottom: -15px">

            @include('reports.widget-kemampuanumum',[
            'image' => "1.jpg",
            'title' => "KEMAMPUAN UMUM",
            'score' => "$data->k_umum",
            'color_title' => "a5bd07",
            'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
            perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
            bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])


            @include('reports.widget-kemampuanumum',[
            'image' => "2.jpg",
            'title' => "PEMAHAMAN SOSIAL",
            'score' => "$data->k_sosial",
            'color_title' => "e79b2b",
            ])

            <!-- KEMAMPUAN VERBAL -->
            @include('reports.widget-kemampuanumum',[
            'image' => "3.jpg",
            'title' => "KEMAMPUAN VERBAL",
            'color_title' => "cb2f30",
            'score' => "$data->k_verbal",
            ])
            <!-- KEMAMPUAN VERBAL -->

            <!-- KEMAMPUAN BERHITUNG -->
            @include('reports.widget-kemampuanumum',[
            'image' => "4.jpg",
            'title' => "KEMAMPUAN BERHITUNG",
            'color_title' => "2f9bcc",
            'score' => "$data->k_berhitung",
            ])
            <!--  END KEMAMPUAN BERHITUNG -->


            <!-- KEMAMPUAN ANALISIS SINTESIS -->
            @include('reports.widget-kemampuanumum',[
            'image' => "5.jpg",
            'title' => "KEMAMPUAN ANALISIS SINTESIS",
            'color_title' => "ad30cc",
            'score' => "$data->k_analisis"
            ])
            <!--  KEMAMPUAN ANALISIS SINTESIS -->

            <!-- KEMAMPUAN SPASIAL -->
            @include('reports.widget-kemampuanumum',[
            'image' => "6.jpg",
            'title' => "KEMAMPUAN SPASIAL (PANDANG RUANG)",
            'color_title' => "cd2f6c",
            'score' => "$data->k_spasial"
            ])
            <!--  END KEMAMPUAN SPASIAL -->

            <!-- PERSEPSI BENTUK -->
            @include('reports.widget-kemampuanumum',[
            'image' => "7.jpg",
            'title' => "PERSEPSI BENTUK",
            'color_title' => "b3c728",
            'score' => "$data->persepsi_bentuk"
            ])
            <!--  END PERSEPSI BENTUK -->

            <!-- KEMAMPUAN PENALARAN / ANALISIS LOGIS -->
            @include('reports.widget-kemampuanumum',[
            'image' => "8.jpg",
            'title' => "KEMAMPUAN PENALARAN / ANALISIS LOGIS",
            'color_title' => "db8e1b",
            'score' => "$data->k_penalaran"
            ])
            <!--  END KEMAMPUAN PENALARAN / ANALISIS LOGIS -->

        </div>
        <div class="page">




            <!-- KONSENTRASI -->
            @include('reports.widget-kemampuanumum',[
            'image' => "9.jpg",
            'title' => "KONSENTRASI",
            'color_title' => "cb2f30",
            'score' => "$data->konsentrasi"
            ])
            <!--  END KONSENTRASI -->
                <br><br><br>
            <!-- DAYA INGAT -->
            @include('reports.widget-kemampuanumum',[
            'image' => "10.jpg",
            'title' => "DAYA INGAT",
            'color_title' => "2f9bcc",
            'score' => "$data->daya_ingat"
            ])
            <!--  END DAYA INGAT -->

            <!-- KEMAMPUAN UNTUK MEMAHAMI MASALAH -->
            @include('reports.widget-kemampuanumum',[
            'image' => "11.jpg",
            'title' => "KEMAMPUAN UNTUK MEMAHAMI MASALAH",
            'color_title' => "ad30cc",
            'score' => "$data->k_memahami_masalah"
            ])
            <!--  END  KEMAMPUAN UNTUK MEMAHAMI MASALAH -->

            <img src="{{ (asset('assets-report/judul1.jpg'))}}" width="200px" style="margin-top: 10px;">

            <!-- INISIATIF -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/8.jpg",
            'title' => "INISIATIF",
            'color_title' => "df8f18",
            'score' => "$data->inisiatif"
            ])
            <!-- INISIATIF -->

            <!-- KOMITMEN TERHADAP TUGAS -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/9.jpg",
            'title' => "KOMITMEN TERHADAP TUGAS",
            'color_title' => "cb2f30",
            'score' => "$data->komitmen_terhadap_tugas"
            ])
            <!-- KOMITMEN TERHADAP TUGAS -->

            <!-- DAYA TAHAN TERHADAP STRES -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/10.jpg",
            'title' => "DAYA TAHAN TERHADAP STRES",
            'color_title' => "2f9bcc",
            'score' => "$data->daya_tahan_terhadap_stress"
            ])
            <!-- DAYA TAHAN TERHADAP STRES -->

            <!-- MOTIVASI BERPRESTASI -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/11.jpg",
            'title' => "MOTIVASI BERPRESTASI",
            'color_title' => "ad30cc",
            'score' => "$data->motivasi_berprestasi"
            ])
            <!-- MOTIVASI BERPRESTASI -->

            <!-- SISTEMATIKA KERJA -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/12.jpg",
            'title' => "SISTEMATIKA KERJA",
            'color_title' => "cd2f6c",
            'score' => "$data->sistematika_kerja"
            ])
            <!-- SISTEMATIKA KERJA -->

            <img src="{{ (asset('assets-report/judul2.jpg'))}}" width="200px" style="margin-top: 10px;">

            <!-- KEMAMPUAN KERJASAMA -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/1.jpg",
            'title' => "KEMAMPUAN KERJASAMA",
            'color_title' => "c1d43c",
            'score' => "$data->kemampuan_kerjasama"
            ])
            <!-- KEMAMPUAN KERJASAMA -->

            <!-- SENSITIFITAS -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/2.jpg",
            'title' => "SENSITIFITAS",
            'color_title' => "e79b2b",
            'score' => "$data->sensitifitas"
            ])
            <!-- SENSITIFITAS -->

            <!-- KEPERCAYAAN DIRI -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/3.jpg",
            'title' => "KEPERCAYAAN DIRI",
            'color_title' => "cb2f30",
            'score' => "$data->kepercayaan_diri"
            ])
            <!-- KEPERCAYAAN DIRI -->

            <!-- PENYESUAIAN DIRI -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/4.jpg",
            'title' => "PENYESUAIAN DIRI",
            'color_title' => "2f9bcc",
            'score' => "$data->penyesuaian_diri"
            ])
            <!-- PENYESUAIAN DIRI -->
                <br>
            <!-- KEMANDIRIAN -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/5.jpg",
            'title' => "KEMANDIRIAN",
            'color_title' => "ad30cc",
            'score' => "$data->kemandirian"
            ])
            <!-- KEMANDIRIAN -->

            <!-- STABILITAS EMOSIONAL -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/6.jpg",
            'title' => "STABILITAS EMOSIONAL",
            'color_title' => "cd2f6c",
            'score' => "$data->stabilitas_emosional"
            ])
            <!-- STABILITAS EMOSIONAL -->

            <!-- KONTROL DIRI -->
            @include('reports.widget-kemampuanumum',[
            'image' => "prf/7.jpg",
            'title' => "KONTROL DIRI",
            'color_title' => "b1c42a",
            'score' => "$data->kontrol_diri"
            ])
            <!-- KONTROL DIRI -->


            
            <table style="margin-bottom: 10px; margin-left: -5px;">
                <tr>
                    <td>
                        <div style="height: 230px; background-color: #CA402F; width: 164px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16" style="height: 150px; width: 90px; color:white;display: block;margin-left: auto;margin-right: auto;">
                                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z" />
                            </svg>
                            <div class="text-center text-bold" style="color: white;">
                                Grafik Orientasi <br>
                                Minat Studi <br>
                                <span style="font-size: 11;">
                                    <br>
                                    {{ $data->nama }}
                                </span>

                            </div>
                        </div>


                    </td>
                    <td>

                        <div style="background-color:#dcdcdc">

                            <div style="color:white;font-size:18px">
                            </div>
                            <canvas id="myChart" height="200px" width="557px" style="padding-right:15px;color:green"></canvas>
                            <center>Sumbu X:Skor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sumbu Y:Minat Kerja/Studi</center>
                        </div>
                    </td>
                </tr>
            </table>


            <table class="bg-grey" style="width: 100%;color: #ffffff; margin-bottom: 10px;text-align: center; border-collapse: separate; border-spacing: 10px; font-size: 11;">
                <tr>
                    <td style="background-color: #001B46; width: 80px;">Level</td>
                    <td style="background-color: #001B46;" colspan="2">Tertinggi</td>
                    <td style="background-color: #001B46;" colspan="2">Kedua</td>
                    <td style="background-color: #001B46;" colspan="2">Ketiga</td>
                    <td style="background-color: #001B46;">Kecenderungan</td>
                </tr>
                <tr>
                    <td style='background-color:#007c94'>Minat Studi</td>
                    <td style='background-color:#007c94'>{{ minat_studi($data)[0]['name'] }}</td>
                    <td style='background-color:#4ecad6; width: 20px;'>{{ $data->tertinggi }}</td>
                    <td style='background-color:#007c94'>{{ minat_studi($data)[1]['name'] }}</td>
                    <td style='background-color:#4ecad6;  width: 20px;'>{{ $data->kedua }}</td>
                    <td style='background-color:#007c94'>{{ minat_studi($data)[2]['name'] }}</td>
                    <td style='background-color:#4ecad6;  width: 20px;'>{{ $data->ketiga }}</td>
                    <td style='background-color:#007c94'>{{ $data->kecenderungan }}</td>
                </tr>
            </table>

            <br>
            <span style="color: black;">Penjelasan :</span>
            <br>
            <table border='1px' class="" style="border-collapse: collapse;">
                <thead id='kepalabawah'>
                    <tr>
                        <th>Orientasi Minat</th>
                        <th>Karakteristik</th>
                    </tr>
                </thead>
                <tbody style='background-color:#21a5ff;color:black; border-collapse: collapse;'>
                    <tr>
                        <td align='center'>{{ orientasi_title($data->tertinggi) }} <br>
                            {{ round($data->orientasisatupersen) }}%
                        </td>
                        <td style="text-align: justify; font-size: 11;">{{ orientasi_description($data->tertinggi) }} </td>
                    </tr>
                    <tr>
                        <td align='center'>{{ orientasi_title($data->kedua) }} <br>
                            {{ round($data->orientasiduapersen) }}%
                        </td>
                        <td style="text-align: justify; font-size: 11;">{{ orientasi_description($data->kedua) }} </td>
                    </tr>
                    <tr>
                        <td align='center'>{{ orientasi_title($data->ketiga) }} <br>
                            {{ round($data->orientasitigapersen) }}%
                        </td>
                        <td style="text-align: justify; font-size: 11;">{{ orientasi_description($data->ketiga) }} </td>
                    </tr>


                </tbody>
            </table>

            <br>
            <table border="1" style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td colspan="2" class="text-bold text-center" style="color: white; background: #000;"> Jurusan yang Disarankan </td>
                </tr>
                <tr>
                    <td class=" text-center text-bold"> Rekomendasi 1</td>
                    <td class="pl-10 text-bold" style="width: 550px"> {{ $data->rekom1 }} </td>
                </tr>
                <tr>
                    <td class="text-center text-bold"> Rekomendasi 2</td>
                    <td class="pl-10 text-bold"> {{ $data->rekom2 }} </td>
                </tr>
            </table>

            <table style="width: 100%; margin-top: 40px;">

                <thead>
                    <tr>
                        <th style="width: 50%;">
                            Psikolog Pemeriksa

                        </th>
                        <th>
                            Direktur {{ company_get('name') }}
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <center> <img width="200px" height="200px" src="{{ asset(company_get('ttd_psikolog')) }}" alt="" style="margin-top: -50px;"> </center>
                            <div class="text-bold text-center" style="margin-top: -40px;">
                                {{ company_get('psikolog') }}
                                <br>
                                SIPP : {{ company_get('sipp_psikolog') }}
                            </div>
                        </th>
                        <th>
                            <center> <img width="200px" height="200px" src="{{ asset(company_get('ttd_director')) }}" alt="" style="margin-top: -50px;"> </center>
                            <div class="text-bold text-center" style="margin-top: -40px;">
                                {{ company_get('director') }}
                            </div>
                        </th>
                    </tr>
                </thead>


            </table>


        </div>

    </div>
</body>

</html>