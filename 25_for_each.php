<?php

$name = ["dimas", "fajar", "udin"];

for ($i =0; $i < count($name); $i++){
    echo "hallo $name[$i]" . PHP_EOL;
}

foreach ($name as $name) {
    echo "hallo $name" . PHP_EOL;
}

$person = [
    "first_name" => "fajar",
    "midle_name" => "dimas",
    "last_name" => "udin"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}