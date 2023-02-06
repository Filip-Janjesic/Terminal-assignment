<?php

include_once 'Pomocno.php';

class Start{
    
    private $korisnici;
    private $komentari;
    private $proizvodi;
    private $ocjene;

    public function __construct($argc,$argv){
        $this->korisnici=[];
        $this->komentari=[];
        $this->proizvodi=[];
        $this->ocjene=[];
        if($argc>1 && $argv[1]=='dev'){
            $this->testPodaci();
            $this->dev=true;
        }else{
            $this->dev=false;
        }
        $this->pozdravnaPoruka();
        $this->glavniIzbornik();
    }

    private function pozdravnaPoruka(){
        echo 'Welcome to Terminal assigment - Web Shop' . PHP_EOL;
    }

    private function glavniIzbornik(){
        echo 'Main menu' . PHP_EOL;
        echo '1. Users' . PHP_EOL;
        echo '2. Products' . PHP_EOL;
        echo '3. Product rating' . PHP_EOL;
        echo '4. Exit the program' . PHP_EOL;
        $this->odabirOpcijeGlavniIzbornik();
    }
}