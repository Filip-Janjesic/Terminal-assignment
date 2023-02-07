<?php

class Pomocno{

    public static function numberRange($message,$min,$max){
        while(true){
            $i=readline($message);
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo 'The entry must be in between ' . $min . ' & ' . $max . PHP_EOL;
                continue;
            }
            return $i;
        }
    }

    public static function textInput($message,$value=''){
        while(true){
            $s=readline($message);
            $s=trim($s);
            if(strlen($s)===0 && $value===''){
                echo 'Mandatory entry' . PHP_EOL;
                continue;
            }
            if(strlen($s)===0 && $value!==''){
                return $value;
            }
            return $s;
        }
    }
    
    public static function decimalNumberEntry($message){
        while(true){
            $s=readline($message);
            $s=(double)$s;
            if($s<=0){
                echo 'The number must be greater than zero' . PHP_EOL;
                continue;
            }
            return $s;
        }
    }
    
}