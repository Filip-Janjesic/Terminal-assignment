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
        switch(Functions::numberRange('Chooos an option: ',1,5)){
            case 1:
                $this->userMenu();
                break;
            case 2:
                $this->productMenu();
                break;
                case 5:
                    echo 'Farewell!' . PHP_EOL;
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

    private function selectOptionsUser(){
        switch(Functions::numberRange('Chooos an option: ',1,5)){
            case 1:
                $this->userOverview();
                break;
            case 2:
                $this->enterNewUser();
                break;
            case 3:
                if(count($this->users)===0){
                    echo 'No users in the app' . PHP_EOL;
                    $this->userMenu();
                }else{
                    $this->changeUser();
                }
                break;
            case 4:
                if(count($this->users)===0){
                    echo 'No users in the app' . PHP_EOL;
                    $this->userMenu();
                }else{
                    $this->deleteUser();
                }
                    break;
            case 5:
                $this->mainMenu();
                break;
            default:
                $this->userMenu();
        }
    }

    private function deleteUser(){
        $this->userOverview(false);
        $rb = Functions::numberRange('Choose user: ',1,count($this->users));
        $rb--;
        if($this->dev){
            echo'Before' . PHP_EOL;
            print_r($this->users);
        }
        array_splice($this->users,$rb,1);
        if($this->dev){
            echo 'Before' . PHP_EOL;
            print_r($this->users);
        }
        $this->userMenu();
    }
    
    private function changeUser(){
        $this->userOverview(false);
        $rb = Functions::numberRange('Choose user: ',1,count($this->users));
        $rb--;
        $this->users[$rb]->name = Pomocno::textInput('Insert user name (' .
        $this->users[$rb]->name .'): ',
        $this->users[$rb]->name);
    }

    private function selectOptionsProduct(){
        switch(Functions::numberRange('Chooos an option: ',1,5)){
            case 1:
                $this->productOverview();
                break;
            case 2:
                $this->enterNewProduct();
                break;
            case 3:
                if(count($this->users)===0){
                    echo 'No product in the app' . PHP_EOL;
                    $this->productMenu();
                }else{
                    $this->changeProduct();
                }
                break;
            case 4:
                if(count($this->users)===0){
                    echo 'No product in the app' . PHP_EOL;
                    $this->productMenu();
                }else{
                    $this->deleteProduct();
                }
                    break;
            case 5:
                $this->mainMenu();
                break;
            default:
                $this->productMenu();
        }
    }

    private function deleteProduct(){
        $this->productOverview(false);
        $rb = Functions::numberRange('Choose product: ',1,count($this->products));
        $rb--;
        if($this->dev){
            echo'Before' . PHP_EOL;
            print_r($this->products);
        }
        array_splice($this->products,$rb,1);
        if($this->dev){
            echo 'Before' . PHP_EOL;
            print_r($this->products);
        }
        $this->productMenu();
    }

    private function changeProduct(){
        $this->productOverview(false);
        $rb = Functions::numberRange('Choose user: ',1,count($this->products));
        $rb--;
        $this->products[$rb]->name = Pomocno::textInput('Insert product name (' .
        $this->products[$rb]->name .'): ',
        $this->products[$rb]->name);
    }

    private function userOverview($showMenu=true){
        echo '--------------------' . PHP_EOL;
        echo 'Users in app' . PHP_EOL;
        $rb=1;
        foreach($this->users as $v){
            echo $rb++ . '. ' . $v->name . 
            ' (' . $v->name . '), ' . count($v->users) 
            . ' users' . PHP_EOL;
            $rbp=0;
            foreach($v->users as $p){
                echo "\t" . ++$rbp . '. '  . $p->name . ' ' . PHP_EOL;
            }
        }
        echo '--------------------' . PHP_EOL;
        if($showMenu){
            $this->userOverview();
        }   
    }

}

new Start($argc,$argv);