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
                            10, 12, 14, 13, 13, 13, 13
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
                                fontSize: 18
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,

                            },
                            ticks: {
                                fontSize: 18,
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
            page-break-after: always;
            page-break-inside: avoid;
        }
    </style>

</head>

<body>

    <div class="container-fluid" style='margin-bottom:10px;background-color:white;padding:15px'>
        <center><img src="{{ asset('assets-report/kopbaru.png') }}" width="100%"></center><br>
        <div class="row" style="margin-bottom:20px">
            <table>
                <tbody>

                    <tr>
                        <td rowspan="5" width="200px">
                            <div style="text-align:center;text-align:right"><img src="{{ asset('assets-report/nama.png') }}" width="90px"></div>
                        </td>

                    </tr>
                    <tr>
                        <td rowspan="5">
                            <div style="text-align:left;color:#0080b3;font-weight:bold; width:200px"> Muh Ardi Irawan </div>
                            <div style="text-align:left;color:#0080b3;font-weight:bold; width:200px"> Laki-laki </div>
                            <div style="text-align:left;color:#0080b3;font-weight:bold; width:200px"> 14 Tahun </div>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Sekolah</td>
                        <td>: $row->nama_sekolah </td>
                    </tr>
                    <tr class="putih">

                        <td></td>
                        <td>Tanggal Test </td>
                        <td>: $row->tgl_test</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NISN</td>
                        <td>: $row->no_test</td>
                    </tr>


                </tbody>
            </table>
        </div>

        <h5 style="padding:5px;background-color:#0e81c4;color:white;width:408px">IQ = 97, menurut IST
        </h5>
        <img src="{{ (asset('assets-report/judul.jpg'))}}" width="300px">

        @include('reports.widget-kemampuanumum',[
        'image' => "1.jpg",
        'title' => "KEMAMPUAN UMUM",
        'color_title' => "a5bd07",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])

        <!-- PEMAHAMAN SOSIAL -->
        @include('reports.widget-kemampuanumum',[
        'image' => "2.jpg",
        'title' => "PEMAHAMAN SOSIAL",
        'color_title' => "e79b2b",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!-- END PEMAHAMAN SOSIAL -->

        <!-- KEMAMPUAN VERBAL -->
        @include('reports.widget-kemampuanumum',[
        'image' => "3.jpg",
        'title' => "KEMAMPUAN VERBAL",
        'color_title' => "cb2f30",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!-- KEMAMPUAN VERBAL -->

        <!-- KEMAMPUAN BERHITUNG -->
        @include('reports.widget-kemampuanumum',[
        'image' => "4.jpg",
        'title' => "KEMAMPUAN BERHITUNG",
        'color_title' => "2f9bcc",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!--  END KEMAMPUAN BERHITUNG -->

        <!-- KEMAMPUAN BERHITUNG -->
        @include('reports.widget-kemampuanumum',[
        'image' => "5.jpg",
        'title' => "KEMAMPUAN ANALISIS SINTESIS",
        'color_title' => "ad30cc",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!--  END KEMAMPUAN BERHITUNG -->

        <!-- KEMAMPUAN SPASIAL -->
        @include('reports.widget-kemampuanumum',[
        'image' => "6.jpg",
        'title' => "KEMAMPUAN SPASIAL (PANDANG RUANG)",
        'color_title' => "cd2f6c",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!--  END KEMAMPUAN SPASIAL -->

        <!-- PERSEPSI BENTUK -->
        @include('reports.widget-kemampuanumum',[
        'image' => "7.jpg",
        'title' => "PERSEPSI BENTUK",
        'color_title' => "b3c728",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!--  END PERSEPSI BENTUK -->

        <!-- KEMAMPUAN PENALARAN -->
        @include('reports.widget-kemampuanumum',[
        'image' => "8.jpg",
        'title' => "KEMAMPUAN PENALARAN / ANALISIS LOGIS",
        'color_title' => "db8e1b",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!--  END KEMAMPUAN PENALARAN -->

        <!-- KONSENTRASI -->
        @include('reports.widget-kemampuanumum',[
        'image' => "9.jpg",
        'title' => "KONSENTRASI",
        'color_title' => "cb2f30",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!--  END KONSENTRASI -->


        <!-- DAYA INGAT -->
        @include('reports.widget-kemampuanumum',[
        'image' => "10.jpg",
        'title' => "DAYA INGAT",
        'color_title' => "2f9bcc",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!--  END DAYA INGAT -->

        <!-- KEMAMPUAN UNTUK MEMAHAMI MASALAH -->
        @include('reports.widget-kemampuanumum',[
        'image' => "11.jpg",
        'title' => "KEMAMPUAN UNTUK MEMAHAMI MASALAH",
        'color_title' => "ad30cc",
        'description' => "Cukup mampu untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat
        perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau
        bayangan (shading) dari suatu vigur panjang lebar suatu garis." ])
        <!--  KEMAMPUAN UNTUK MEMAHAMI MASALAH -->


        <table style="margin-bottom: 10px;">
            <tr>
                <td><img src="{{ asset('assets-report/grafikkiri.jpg') }} "></td>
                <td>

                    <div style="background-color:#dcdcdc">

                        <div style="color:white;font-size:18px">
                        </div>
                        <canvas id="myChart" height="264    px" width="1000px" style="padding-right:15px;color:green"></canvas>
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
                <td style="background-color: #001B46;">Konsistensi</td>
            </tr>
            <tr>
                <td style='background-color:#007c94'>Minat Studi</td>
                <td style='background-color:#007c94'>Investigative</td>
                <td style='background-color:#4ecad6; width: 20px;'>S</td>
                <td style='background-color:#007c94'>Conventional</td>
                <td style='background-color:#4ecad6;  width: 20px;'>A</td>
                <td style='background-color:#007c94'>Investigative</td>
                <td style='background-color:#4ecad6;  width: 20px;'>I</td>
                <td style='background-color:#007c94'>S-E-A </td>
            </tr>
        </table>

        <span style="color: black;">Keterangan : </span>
        <br>
        <table border='1px' style='width: 100%; font-size: 10; border-collapse: collapse; color:black'>
            <tbody>
                <tr>
                    <td style='padding:10px'>Taraf Kesesuaian Minat Studi yang dipilih dengan rentang nilai konsistensi 1-3<br>
                        1. Tinggi (Cita-cita Sangat Sesuai dengan Minat Studi)<br>
                        2. Sedang (Cita-cita Cukup Sesuai dengan Minat Studi)<br>
                        3. Rendah (Cita-cita Kurang Sesuai dengan Minat Studi)
                    </td>
                </tr>
            </tbody>
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
                    <td align='center'>Sosial <br>
                        48% </td>
                    <td>Lebih menyukai bekerja dengan orang drpd dgn benda seperti aktifitas: menginformasikan sesuatu, membimbing, melatih,
                        dan berinteraksi dengan orang lain. Berjiwa sosial (senang membantu), suka bekerjasama, dan penuh etika. Berminat dengan
                        orang dan masalah-masalah mereka, senang mencari tahu sebab-sebab orang berperilaku, pola-pola budaya, gaya hidup.
                        Biasanya digambarkan sebagai: bersahabat, senang berkawan dan bekerjasama dengan orang lain, murah hati (dermawan).
                        Biasanya digambarkan sebagai: penuh pemikiran, empatik, idealistic, bertanggung jawab, dan peduli dengan kesulitan orang
                        lain. </td>
                </tr>
                <tr>
                    <td align='center'>Sosial <br>
                        48% </td>
                    <td>Lebih menyukai bekerja dengan orang drpd dgn benda seperti aktifitas: menginformasikan sesuatu, membimbing, melatih,
                        dan berinteraksi dengan orang lain. Berjiwa sosial (senang membantu), suka bekerjasama, dan penuh etika. Berminat dengan
                        orang dan masalah-masalah mereka, senang mencari tahu sebab-sebab orang berperilaku, pola-pola budaya, gaya hidup.
                        Biasanya digambarkan sebagai: bersahabat, senang berkawan dan bekerjasama dengan orang lain, murah hati (dermawan).
                        Biasanya digambarkan sebagai: penuh pemikiran, empatik, idealistic, bertanggung jawab, dan peduli dengan kesulitan orang
                        lain. </td>
                </tr>
                <tr>
                    <td align='center'>Sosial <br>
                        48% </td>
                    <td>Lebih menyukai bekerja dengan orang drpd dgn benda seperti aktifitas: menginformasikan sesuatu, membimbing, melatih,
                        dan berinteraksi dengan orang lain. Berjiwa sosial (senang membantu), suka bekerjasama, dan penuh etika. Berminat dengan
                        orang dan masalah-masalah mereka, senang mencari tahu sebab-sebab orang berperilaku, pola-pola budaya, gaya hidup.
                        Biasanya digambarkan sebagai: bersahabat, senang berkawan dan bekerjasama dengan orang lain, murah hati (dermawan).
                        Biasanya digambarkan sebagai: penuh pemikiran, empatik, idealistic, bertanggung jawab, dan peduli dengan kesulitan orang
                        lain. </td>
                </tr>


            </tbody>
        </table>

    </div>



</body>

</html>