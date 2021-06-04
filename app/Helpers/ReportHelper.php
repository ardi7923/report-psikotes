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
                return "Sangat Kurang Mampu menyerap, memproses dan menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari";
                break;
            case '2':
                return "Kurang menyerap, memproses dan menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari";
                break;
            case '3':
                return "Cukup Mampu menyerap, memproses dan menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari";
                break;
            case '4':
                return "Mampu menyerap, memproses dan menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari dengan baik";
                break;
            case '5':
                return "Mampu menyerap, memproses dan menggunakan kapasitas atau potensinya dalam kehidupan sehari-hari dengan sangat baik";
                break;
        }
    }
}


if (!function_exists('descripition_pemahaman_sosial')) {

    function descripition_pemahaman_sosial($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
                break;
            case '2':
                return "Kurang Mampu mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
                break;
            case '3':
                return "Cukup Mampu mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
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
                return "Sangat Kurang Mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
                break;
            case '2':
                return "Kurang Mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
                break;
            case '3':
                return "Cukup Kurang Mampu mengungkap, memahami, dan memecahkan permasalahan-permasalahan sosial";
                break;
            case '4':
                return "Memiliki kemampuan menganalisis informasi yang bersifat verbal dengan baik";
                break;
            case '5':
                return "Memiliki kemampuan menganalisis informasi yang bersifat verbal dengan sangat baik";
                break;
        }
    }
}

if (!function_exists('description_kemampuan_berhitung')) {

    function description_kemampuan_berhitung($score, $title)
    {
        switch ($score) {
            case '1':
                return "Sangat Kurang Mampu melakukan analisis menggunakan angka";
                break;
            case '2':
                return "Kurang Mampu melakukan analisis menggunakan angka";
                break;
            case '3':
                return "Cukup Mampu melakukan analisis menggunakan angka";
                break;
            case '4':
                return "Mampu melakukan analisis menggunakan angka dengan baik";
                break;
            case '5':
                return "Mampu melakukan analisis menggunakan angka dengan sangat baik";
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
