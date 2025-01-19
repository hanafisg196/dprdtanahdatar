<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;

if (!function_exists('wordLimiter')) {
    function wordLimiter($word, $limit)
    {
        $replace = '....';

        if (strlen($word) > $limit) {
            $limitWord = substr($word, 0, $limit) . $replace;
        } else {
            return $word;
        }
        return $limitWord;
    }
}
if (!function_exists('encrypt')) {
    function encrypt($payload)
    {
        return Crypt::encrypt($payload);
    }
}

if (!function_exists('timeMachine')) {
    function timeMachine()
    {
        return Carbon::setLocale('id');
    }
}

if (!function_exists('dateFormat')) {
    function dateFormat($date)
    {
        return Carbon::create($date)
        // ->setTime(7, 0)
        ->translatedFormat('d F Y');
    }
}

if (!function_exists('countThiFuckingShiit')) {
    function countThiFuckingShiit()
    {
       $data =  "Agenda - Pemusnahan Barang Bukti Hasil Kejahatan";
       return strlen($data);
    }
}

