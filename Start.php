<?php

include_once 'Functions.php';

class Start{
    
    private $users;
    private $products;
    private $comments;
    private $rating;
    private $dev;

    public function __construct($argc,$argv){
        $this->users=[];
        $this->products=[];
        $this->comments=[];
        $this->rating=[];
        if($argc>1 && $argv[1]=='dev'){
            //$this->testData();
            $this->dev=true;
        }else{
            $this->dev=false;
        }
        $this->greetingMessage();
        $this->mainMenu();
    }

    private function greetingMessage(){
        echo 'Welcome to Terminal assigment - Web Shop' . PHP_EOL;
    }

    private function MainMenu(){
        echo 'Main menu' . PHP_EOL;
        echo '1. Users' . PHP_EOL;
        echo '2. Products' . PHP_EOL;
        echo '3. Product comment' . PHP_EOL;
        echo '4. Product rating' . PHP_EOL;
        echo '5. Exit the program' . PHP_EOL;
        $this->selectOptionsMainMenu();
    }

    private function selectOptionsMainMenu(){
        switch(Functions::numberRange('Chooos an option: ',1,4)){
            case 1:
                $this->userMenu();
                break;
            case 2:
                $this->productMenu();
                break;
                case 5:
                    echo 'Doviđenja!' . PHP_EOL;
                    break;
                default:
                    $this->mainMenu();
        }
    }

    private function userMenu(){
        echo 'User Menu' . PHP_EOL;
        echo '1. Overview' . PHP_EOL;
        echo '2. Enter a new one' . PHP_EOL;
        echo '3. Changing an existing one' . PHP_EOL;
        echo '4. Delete an existing one' . PHP_EOL;
        echo '5. Return back to the main menu' . PHP_EOL;
        $this->selectOptionsUser();
    }

    private function productMenu(){
        echo 'User Menu' . PHP_EOL;
        echo '1. Overview' . PHP_EOL;
        echo '2. Enter a new one' . PHP_EOL;
        echo '3. Changing an existing one' . PHP_EOL;
        echo '4. Delete an existing one' . PHP_EOL;
        echo '5. Return back to the main menu' . PHP_EOL;
        $this->selectOptionsProduct();
    }

}