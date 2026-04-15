<?php 
#function tanpa elseif
function chekstatuskelulusan($grade){
    if($grade == "A" || $grade == "B" || $grade == "C" || $grade == "D"){
        echo "anda lolos";
    }else{
        echo "anda tidak lolos";
    }
}
chekstatuskelulusan("A");


#function dengan elseif

function nilai_kelulusan($nilai){
    if($nilai == "A"){
        ECHO "anda lulus dengan sangat baik";
    }elseif($nilai == "B"){
        ECHO "anda lulus cukup baik";
    }elseif($nilai == "C"){
        echo "anda lulus";
    }else{
        echo "anda tidak lulus";
    }
}
nilai_kelulusan("D");