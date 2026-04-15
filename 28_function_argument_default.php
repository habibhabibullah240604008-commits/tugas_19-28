<?php


function checkStatusKelulusan($grade = 0){
    if ($grade > 75) {
        echo "anda lulus";
    }else{
        echo "anda tidak lulus";
    }
}
checkStatusKelulusan(80);