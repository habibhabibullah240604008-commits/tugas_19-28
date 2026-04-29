<?php 

class hewan {
    public $nama; 
    public function __construct(string $nama){
        $this->nama = $nama;
    }

    public function bersuara(){
        echo $this->nama . " bersuara";
    }

}

class tikus extends hewan {

    public function bersuara(){
        echo $this->nama . "bersuara : duit";

    }
}

$tikus = new tikus("tikus");
$tikus->bersuara();

