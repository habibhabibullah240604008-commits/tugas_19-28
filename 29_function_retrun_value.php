<?php 

function menghitungluaspersegipanjang(int $panjang, int $lebar){
    $hasil = $panjang * $lebar;
    return $hasil;
}

 $hasildarifungsi = menghitungluaspersegipanjang(10,5);
 echo $hasildarifungsi;