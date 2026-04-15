<?php

$counter = 1;

while (true){
    echo "berhenti :" . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10){
        break;
    }
}


for ($counter = 0; $counter <= 20; $counter++){
    if ($counter % 2 == 0){
        continue;
    }

echo "hallo semua" .$counter .PHP_EOL;
}