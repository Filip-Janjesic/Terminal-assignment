<?php

include_once 'Help.php';

class Start{
    
    private $users;
    private $comments;
    private $products;
    private $grades;
    private $dev;

    public function __construct($argc,$argv){
        $this->users=[];
        $this->comments=[];
        $this->products=[];
        $this->grades=[];
        if($argc>1 && $argv[1]=='dev'){
            //$this->testData();
            $this->dev=true;
        }else{
            $this->dev=false;
        }
        $this->greetingMessage();
        $this->MainMenu();
    }

    private function greetingMessage(){
        echo 'Welcome to Terminal assigment - Web Shop' . PHP_EOL;
    }

    private function MainMenu(){
        echo 'Main menu' . PHP_EOL;
        echo '1. Users' . PHP_EOL;
        echo '2. Products' . PHP_EOL;
        echo '3. Product rating' . PHP_EOL;
        echo '4. Exit the program' . PHP_EOL;
        $this->selectOptionsMainMenu();
    }

    private function selectOptionsMainMenu(){

    }



}