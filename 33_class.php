<?php

class person{
    public string $name;
    public string $address;
    public int $umur;

    public function  sayhello(string $name){
        echo "hallo : $name" . " ALAMAT DI : " . $this->address . " umur saya : " . $this->umur;
 
    }
    public function __construct(){
    echo " fungsi ini tidak akan dipanggil oleh object";
}
    public function __destruct(){
        echo " fungsi ini di panggil paling akhir";
    }

}

$MAHASISWA = new person ();
$MAHASISWA->umur =70;
$MAHASISWA->address = "neraka";
$MAHASISWA->sayhello("imam");


