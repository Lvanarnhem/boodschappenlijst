<?php
class Validator {
    public static function string($value, $min, $max){
        if (strlen($value) < $min || strlen($value) > $max) {
            return false;
        }
        else {
            return true;
        }
    }
    
    public static function integer($value, $min = 1, $max = 50){
        if ($value < $min || $value > $max) {
            return false;
        }
        else {
           
            return true;
        }
    }
    
    public static function decimal($value, $min = 0.01, $max = 500.00){
        if ($value < $min || $value > $max) {
            return false;
        }
        else {
            return true;
        }
    }
}