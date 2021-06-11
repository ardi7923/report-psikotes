<?php


if (!function_exists('iq_description')) {

    function iq_description($iq)
    {
        if ($iq >= 130) {
            $predikat = "Sangat Superior";
        } else if (($iq >= 120) and ($iq <= 129)) {
            $predikat = "Superior";
        } else if (($iq >= 110) and ($iq <= 119)) {
            $predikat = "Di atas rata-rata";
        } else if (($iq >= 90) and ($iq <= 109)) {
            $predikat = "Rata-rata";
        } else {
            $predikat = "Di bawah rata-rata";
        }

        return $predikat;
    }
}

if (!function_exists('minat_studi')) {
    function minat_studi($data)
    {
        $arr = [
            [
                'name' => 'conventional',
                'value' => $data->conventional
            ],
            [
                'name' => 'enterprise',
                'value' => $data->enterprise
            ],
            [
                'name' => 'social',
                'value' => $data->social
            ],
            [
                'name' => 'artistic',
                'value' => $data->artistic
            ],
            [
                'name' => 'investigative',
                'value' => $data->investigative
            ],
            [
                'name' => 'realistic',
                'value' => $data->realistic
            ],
        ];

        $collect = collect($arr)->sortByDesc('value')->values();

        return $collect;
    }
}

if (!function_exists('image_kemampuan')) {

    function image_kemampuan($value)
    {
        $score = substr($value, 1, 1);

        $baseImageUrl = 'assets-report';

        switch ($score) {
            case '1':
                return $baseImageUrl . '/ket1.png';
                break;
            case '2':
                return $baseImageUrl . '/ket2.png';
                break;
            case '3':
                return $baseImageUrl . '/ket3.png';
                break;
            case '4':
                return $baseImageUrl . '/ket4.png';
                break;
            case '5':
                return $baseImageUrl . '/ket5.png';
                break;
        }
    }
}

if (!function_exists('description_kemampuan')) {

    function description_kemampuan($value, $title)
    {
        $score = substr($value, 1, 1);

        switch ($title) {
            case 'KEMAMPUAN UMUM':
                return descripition_kemampuan_umum($score, $title);
                break;
            case 'PEMAHAMAN SOSIAL':
                return descripition_pemahaman_sosial($score, $title);
                break;
            case 'KEMAMPUAN VERBAL':
                return description_kemampuan_verbal($score, $title);
                break;
            case 'KEMAMPUAN BERHITUNG':
                return description_kemampuan_berhitung($score, $title);
                break;
            case 'KEMAMPUAN ANALISIS SINTESIS':
                return description_kemampuan_analisis($score, $title);
                break;
            case 'KEMAMPUAN SPASIAL (PANDANG RUANG)':
                return description_kemampuan_spasial($score, $title);
                break;
            case 'PERSEPSI BENTUK':
                return description_persepsi_bentuk($score, $title);
                break;
            case 'KEMAMPUAN PENALARAN / ANALISIS LOGIS':
                return description_kemampuan_penalaran($score, $title);
                break;
            case 'KONSENTRASI':
                return description_konsentrasi($score, $title);
                break;
            case 'DAYA INGAT':
                return description_daya_ingat($score, $title);
                break;
            case 'KEMAMPUAN UNTUK MEMAHAMI MASALAH':
                return description_kemampuan_memahami_masalah($score, $title);
                break;
        }
    }
}

if (!function_exists('descripition_kemampuan_umum')) {

    function descripition_kemampuan_umum($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang mampu menyerap, dan memproses suatu informasi serta menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari ";
                break;
            case '2':
                return "Kurang mampu menyerap, dan memproses suatu informasi serta menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari ";
                break;
            case '3':
                return "Cukup mampu menyerap, dan memproses suatu informasi serta menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari ";
                break;
            case '4':
                return "mampu menyerap, dan memproses suatu informasi serta menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari dengan baik";
                break;
            case '5':
                return "Mampu menyerap, dan memproses suatu informasi serta menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari  dengan sangat baik";
                break;
        }
    }
}


if (!function_exists('descripition_pemahaman_sosial')) {

    function descripition_pemahaman_sosial($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
                break;
            case '2':
                return "Kurang Mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
                break;
            case '3':
                return "Cukup Mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
                break;
            case '4':
                return "Mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial dengan baik";
                break;
            case '5':
                return "Mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_kemampuan_verbal')) {

    function description_kemampuan_verbal($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu menangkap dan mengekspresikan gagasan, kemampuan dan perasaan dalam bentuk bahasa";
                break;
            case '2':
                return "Kurang Mampu menangkap dan mengekspresikan gagasan, kemampuan dan perasaan dalam bentuk bahasa";
                break;
            case '3':
                return "Cukup Mampu menangkap dan mengekspresikan gagasan, kemampuan dan perasaan dalam bentuk bahasa";
                break;
            case '4':
                return "Memiliki kemampuan untuk menangkap dan mengekspresikan gagasan, kemampuan dan perasaan dalam bentuk bahasa dengan baik";
                break;
            case '5':
                return "Memiliki kemampuan untuk menangkap dan mengekspresikan gagasan, kemampuan dan perasaan dalam bentuk bahasa dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_kemampuan_berhitung')) {

    function description_kemampuan_berhitung($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu memecahkan masalah praktis maupun untuk menemukan hubungan informasi yang dikaitkan dengan angka";
                break;
            case '2':
                return "Kurang Mampu memecahkan masalah praktis maupun untuk menemukan hubungan informasi yang dikaitkan dengan angka";
                break;
            case '3':
                return "Cukup Mampu memecahkan masalah praktis maupun untuk menemukan hubungan informasi yang dikaitkan dengan angkaa";
                break;
            case '4':
                return "Kemampuan memecahkan masalah praktis maupun untuk menemukan hubungan informasi yang dikaitkan dengan angka dengan baik";
                break;
            case '5':
                return "Kemampuan memecahkan masalah praktis maupun untuk menemukan hubungan informasi yang dikaitkan dengan angka sangat baik";
                break;
        }
    }
}

if (!function_exists('description_kemampuan_analisis')) {

    function description_kemampuan_analisis($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu untuk menilai, memilah, membuat perbedaan serta hubungan suatu data/informasi dan kemudian membuat kesimpulan";
                break;
            case '2':
                return "Kurang Mampu untuk menilai, memilah, membuat perbedaan serta hubungan suatu data/informasi dan kemudian membuat kesimpulan";
                break;
            case '3':
                return "Cukup Mampu untuk menilai, memilah, membuat perbedaan serta hubungan suatu data/informasi dan kemudian membuat kesimpulan";
                break;
            case '4':
                return "Mampu untuk menilai, memilah, membuat perbedaan serta hubungan suatu data/informasi dan kemudian membuat kesimpulan dengan baik";
                break;
            case '5':
                return "Mampu untuk menilai, memilah, membuat perbedaan serta hubungan suatu data/informasi dan kemudian membuat kesimpulan dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_kemampuan_spasial')) {

    function description_kemampuan_spasial($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang mampu berfikir secara visual pada bentuk-bentuk geometris dan menangkap objek tiga dimensi, serta mengingat hubungan yang dihasilkan dari gerakan  objek dalam suatu ruang";
                break;
            case '2':
                return "Kurang mampu berfikir secara visual pada bentuk-bentuk geometris dan menangkap objek tiga dimensi, serta mengingat hubungan yang dihasilkan dari gerakan  objek dalam suatu ruang";
                break;
            case '3':
                return "Cukup mampu berfikir secara visual pada bentuk-bentuk geometris dan menangkap objek tiga dimensi, serta mengingat hubungan yang dihasilkan dari gerakan  objek dalam suatu ruang";
                break;
            case '4':
                return "Mampu berfikir secara visual pada bentuk-bentuk geometris dan menangkap objek tiga dimensi, serta mengingat hubungan yang dihasilkan dari gerakan  objek dalam suatu ruang dengan baik";
                break;
            case '5':
                return "Mampu berfikir secara visual pada bentuk-bentuk geometris dan menangkap objek tiga dimensi, serta mengingat hubungan yang dihasilkan dari gerakan  objek dalam suatu ruang dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_persepsi_bentuk')) {

    function description_persepsi_bentuk($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu untuk untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau bayangan (shading) dari suatu vigur panjang lebar suatu garis";
                break;
            case '2':
                return "Kurang Mampu untuk untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau bayangan (shading) dari suatu vigur panjang lebar suatu garis";
                break;
            case '3':
                return "Cukup Mampu untuk untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau bayangan (shading) dari suatu vigur panjang lebar suatu garis";
                break;
            case '4':
                return "Mampu untuk untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau bayangan (shading) dari suatu vigur panjang lebar suatu garis dengan baik";
                break;
            case '5':
                return "Mampu untuk untuk melihat bagian-bagian dari satu benda, gambar dan grafik, membuat perbandingan dan perbedaan secara visual dan membuat perbedaan yang nyata pada bentuk atau bayangan (shading) dari suatu vigur panjang lebar suatu garis dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_kemampuan_penalaran')) {

    function description_kemampuan_penalaran($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu untuk berfikir sesuai dengan kaidah akal pikiran sehat";
                break;
            case '2':
                return "Kurang Mampu untuk berfikir sesuai dengan kaidah akal pikiran sehat";
                break;
            case '3':
                return "Cukup Mampu untuk berfikir sesuai dengan kaidah akal pikiran sehat";
                break;
            case '4':
                return "Mampu untuk berfikir sesuai dengan kaidah akal pikiran sehat dengan baik";
                break;
            case '5':
                return "Mampu untuk berfikir sesuai dengan kaidah akal pikiran sehat dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_konsentrasi')) {

    function description_konsentrasi($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu memusatkan dan menjaga perhatiannya pada suatu aktivitas yang sedang dilakukan";
                break;
            case '2':
                return "Kurang Mampu memusatkan dan menjaga perhatiannya pada suatu aktivitas yang sedang dilakukan";
                break;
            case '3':
                return "Cukup Mampu memusatkan dan menjaga perhatiannya pada suatu aktivitas yang sedang dilakukan";
                break;
            case '4':
                return "Mampu memusatkan dan menjaga perhatiannya pada suatu aktivitas yang sedang dilakukan dengan baik";
                break;
            case '5':
                return "Mampu memusatkan dan menjaga perhatiannya pada suatu aktivitas yang sedang dilakukan dengan sangat baikMampu memusatkan dan menjaga perhatiannya pada suatu aktivitas yang sedang dilakukan dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_daya_ingat')) {

    function description_daya_ingat($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu untuk memanggil kembali informasi yang pernah dimasukkan ke dalam otak";
                break;
            case '2':
                return "Kurang Mampu untuk memanggil kembali informasi yang pernah dimasukkan ke dalam otak";
                break;
            case '3':
                return "Cukup Mampu untuk memanggil kembali informasi yang pernah dimasukkan ke dalam otak";
                break;
            case '4':
                return "Mampu untuk memanggil kembali informasi yang pernah dimasukkan ke dalam otak dengan baik";
                break;
            case '5':
                return "Mampu untuk memanggil kembali informasi yang pernah dimasukkan ke dalam otak dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_kemampuan_memahami_masalah')) {

    function description_kemampuan_memahami_masalah($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu untuk mencerna, menghubungkan dan mencari kata kunci dari sebuah permasalahan";
                break;
            case '2':
                return "Kurang Mampu untuk mencerna, menghubungkan dan mencari kata kunci dari sebuah permasalahan";
                break;
            case '3':
                return "Cukup Mampu untuk mencerna, menghubungkan dan mencari kata kunci dari sebuah permasalahan";
                break;
            case '4':
                return "Mampu untuk mencerna, menghubungkan dan mencari kata kunci dari sebuah permasalahan dengan baik";
                break;
            case '5':
                return "Mampu untuk mencerna, menghubungkan dan mencari kata kunci dari sebuah permasalahan dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('orientasi_description')) {
    function orientasi_description($score)
    {
        switch ($score) {
            case 'R' :
                return "Menyukai aktifitas yg lebih banyak 'Mengerjakan' drpd  aktifitas yg banyak 'Memikirkan' , Lebih suka bekerja dengan benda atau peralatan konkrit (mesin, perkakas, alat kerja dlsb) atau hewan daripada dgn orang. , Menyukai pekerjaan yg bersifat praktis dan menggunakan tangan scr langsung (aktifitas manual). , Cenderung menyukai situasi kerja individual (Autonomous or solitary situations) , dan Cenderung memiliki kemauan yg kuat, akurat , dan metodik.";
                break;
            case 'I' :
                return "Biasanya kreatif dan banyak akal, cerdik. Menyukai bekerja dengan ide-ide, dan penggunaan pengetahuan (intelek atau teoritis) drpd bekerja dgn benda atau orang.  Terlihat analitis, menyukai aktifitas dalam bidang sains dan penelitian. Suka mencari tahu asal muasal sesuatu dengan menggunakan metode ilmiah atau pendekatan matematis. Cenderung hati-hati, kritis, mandiri, akurat, rasional, dan intelektual.";
                break;
            case 'A' : 
                return "Cenderung memiliki daya imajinasi yg kuat dan mampu mengekspresikan suatu pandangan atau pendapat menjadi bentuk/produk kreatif. Kurang sistematis dalam bekerja, cenderung menunjukkan perilaku yg ekspresif atau aktifitas kreatif yg melibatkan ekspresi. Kadang terlihat eksentrik (nyeleneh) dalam interaksinya dengan lingkungan.  Menghargai usaha-usaha yg bersifat inovatif dan estetik, gagasan-gagasan “aneh’ atau tidak lazim, keaslian, dan imajinasi.  Biasanya digambarkan sebagai imajinatif, original, intuitif, mandiri, penuh semangat, tidak konvensional (nyeleneh) dan penih idealisme.";
                break;
            case 'S' :
                return "Lebih menyukai bekerja dengan orang drpd dgn benda seperti aktifitas : menginformasikan sesuatu, membimbing, melatih, dan berinteraksi dengan orang lain.  Berjiwa sosial (senang membantu), suka bekerjasama, dan penuh etika.  Berminat dengan orang dan masalah-masalah mereka, senang mencari tahu sebab-sebab orang berperilaku, pola-pola budaya, gaya hidup.  Biasanya digambarkan sebagai : bersahabat, senang berkawan dan bekerjasama dengan orang lain, murah hati (dermawan). Biasanya digambarkan sebagai : penuh pemikiran, empatik, idealistic, bertanggung jawab, dan peduli dengan kesulitan orang lain.";
                break;
            case 'E' :
                return "Menyukai aktifitas mengatur atau mengelola sesuatu sehingga menghasilkan suatu keuntungan atau perolehan ekonomi.  Senang mempengaruhi dan membujuk orang lain untuk mencapai suatu tujuan.  Menyukai tantangan (biasanya dalam bidang politik, ekonomi), senang bersaing-saingan, berani mengambil risiko. Biasanya digambarkan sebagai pribadi yg : ambisius, berpengaruh, senang mendominasi, enerjik, ekstrovert, optimis,  Biasanya digambarkan sebagai pribadi yg : menyukai popularitas, percaya diri tinggi, banyak bicara dan senang berkawan.";
                break;
            case 'C' :
                return "Menyukai aktifitas yg melibatkan perencanaan dan pengaturan data atau benda sehingga rapi dengan pendekatan yag teratur , baik dlm konteks pribadi atau untuk memenuhi target pekerjaan. Menyukai ketepatan informasi, keteraturan, dan prestasi dalam bidang usaha.  Biasanya digambarkan sebagai pribadi yang : patuh, taat aturan, setia, praktis, hati-hati, penuh pertimbangan, efisien, rapi dan teratur, tekun dan cermat.";
                break;
        }
    }
}

if (!function_exists('orientasi_title')) {
    function orientasi_title($score)
    {
        switch ($score) {
            case 'R' :
                return "Realistic";
                break;
            case 'I' :
                return "Iventigative";
                break;
            case 'A' : 
                return "Artistic";
                break;
            case 'S' :
                return "Social";
                break;
            case 'E' :
                return "Enterprise";
                break;
            case 'C' :
                return "Conventional";
                break;
        }
    }
}