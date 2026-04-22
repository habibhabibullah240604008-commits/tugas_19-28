<?php


$nilai = 60;
$absen = 50;
$remidial = false;



if ($nilai > 50 && $absen > 45) {
    echo "kamu lulus ujian";
} else if ($remidial) {
    echo "kamu ikut remidial";
} else {
    echo "kamu tidak lulus ujian";
}