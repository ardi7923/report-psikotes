<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cetak Laporan </title>
    <link href="{{ asset('assets-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    

    <style type="text/css">
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

        .chart-account-impressions {
            width: 900px;
            height: 500px;
            margin: 0 auto;

        }
    </style>


<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.16.0/polyfill.min.js"></script>

    <script type="text/javascript">
             function init() {
                google.load("visualization", "1.1", { packages:["corechart"], callback: 'drawCharts' });
            }
            function drawCharts() {
                drawAccountImpressions('chart-account-impressions');
            }
            
            function drawAccountImpressions(containerId) {
            	var data = google.visualization.arrayToDataTable([
                    ['Day', 'This month', 'Last month'],
                    ['01', 1000, 400],
                    ['05', 800, 700],
                    ['09', 1000, 700],
                    ['13', 1000, 400],
                    ['17', 660, 550],
                    ['21', 660, 500],
                    ['23', 750, 700],
                    ['27', 800, 900]
                ]);
                var options = {
                    width: 700,
                    height: 400,
                    hAxis: { title: 'Day',  titleTextStyle: { color: '#333' } },
                    vAxis: { minValue: 0 },
                    curveType: 'function',
                    chartArea: {
                        top: 30,
                        left: 50,
                        height: '70%',
                        width: '100%'
                    },
                    legend: 'bottom'
                };
                var chart = new google.visualization.LineChart(document.getElementById(containerId));
                chart.draw(data, options);
            }
    </script>
</head>

<body onload="init()">
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
        <div class="page_break"></div>
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


        <div class="row">

            <div class="col-sm-2 col-lg-2">
                <img src="{{ asset('assets-report/grafikkiri.jpg') }} ">
            </div>

        </div>

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

        <div id="chart-account-impressions"></div>
    </div>

           

</body>

</html>