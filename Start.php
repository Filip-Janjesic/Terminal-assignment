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
    }


}