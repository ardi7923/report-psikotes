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
