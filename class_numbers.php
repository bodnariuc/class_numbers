<?php

class NumbersBodnariuc {
    
    public static function roundBodnariuc() {
        $value = 3.265;
        return round($value);
    }
    
    public static function ceilBodnariuc() {
         $value = 3.2;
        return ceil($value);
    }
    
    public static function floorBodnariuc() {
        $value = 3.8;
        return floor($value);
    }
    
    public static function sqrtBodnariuc() {
        $value = 4;
        return sqrt($value);
    }
    
    public static function powBodnariuc() {
        $zaklad = 2;
        $mocnitel = 3;
        return pow($zaklad, $mocnitel);
    }
    
    public static function sinBodnariuc() {
        $value = 45;
        return sin($value);
    }

    public static function cosBodnariuc() {
        $value = 45;
        return cos($value);
    }

    public static function tanBodnariuc() {
        $value = 45;
        return tan($value);
    }
    
    public static function asinBodnariuc() {
        $value = 45;
        return asin($value);
    }

    public static function acosBodnariuc() {
        $value = 45;
        return acos($value);
    }
 
    public static function atanBodnariuc() {
        $value = 45;
        return atan($value);
    }
    
    public static function fmodBodnariuc() {
        $x = 15;
        $y = 6;
        return fmod($x, $y);
    }
    
    public static function maxBodnariuc() {
        $values = array('1', '2', '3');
        return max($values);
    }

    public static function minBodnariuc() {
        $values = array('1', '2', '3');
        return min($values);
    }
    
    public static function absBodnariuc() {
        $value = -15;
        return abs($value);
    }
    
    public static function minusBodnariuc() {
        $a = 1;
        $b = 2;
        return ($a - $b);
    }

    public static function plusBodnariuc() {
        $a = 1;
        $b = 2;
        return ($a + $b);
    }

    public static function delenoBodnariuc() {
        $a = 1;
        $b = 2;
        return ($a / $b);
    }

    public static function kratBodnariuc() {
        $a = 1;
        $b = 2;
        return ($a * $b);
    }
    
    public static function number_formatBodnariuc() {
        $value = 10;
        return number_format($value);
    }
}
var_dump(NumbersBodnariuc::roundBodnariuc());
var_dump(NumbersBodnariuc::ceilBodnariuc());
var_dump(NumbersBodnariuc::floorBodnariuc());
var_dump(NumbersBodnariuc::sqrtBodnariuc());
var_dump(NumbersBodnariuc::powBodnariuc());
var_dump(NumbersBodnariuc::sinBodnariuc());
var_dump(NumbersBodnariuc::cosBodnariuc());
var_dump(NumbersBodnariuc::tanBodnariuc());
var_dump(NumbersBodnariuc::asinBodnariuc());
var_dump(NumbersBodnariuc::acosBodnariuc());
var_dump(NumbersBodnariuc::atanBodnariuc());
var_dump(NumbersBodnariuc::fmodBodnariuc());
var_dump(NumbersBodnariuc::maxBodnariuc());
var_dump(NumbersBodnariuc::minBodnariuc());
var_dump(NumbersBodnariuc::absBodnariuc());
var_dump(NumbersBodnariuc::minusBodnariuc());
var_dump(NumbersBodnariuc::plusBodnariuc());
var_dump(NumbersBodnariuc::delenoBodnariuc());
var_dump(NumbersBodnariuc::kratBodnariuc());
var_dump(NumbersBodnariuc::number_formatBodnariuc());
?>
