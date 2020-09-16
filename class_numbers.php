<?php

class StringsBodnariuc {
    
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
var_dump(StringsBodnariuc::roundBodnariuc());
var_dump(StringsBodnariuc::ceilBodnariuc());
var_dump(StringsBodnariuc::floorBodnariuc());
var_dump(StringsBodnariuc::sqrtBodnariuc());
var_dump(StringsBodnariuc::powBodnariuc());
var_dump(StringsBodnariuc::sinBodnariuc());
var_dump(StringsBodnariuc::cosBodnariuc());
var_dump(StringsBodnariuc::tanBodnariuc());
var_dump(StringsBodnariuc::asinBodnariuc());
var_dump(StringsBodnariuc::acosBodnariuc());
var_dump(StringsBodnariuc::atanBodnariuc());
var_dump(StringsBodnariuc::fmodBodnariuc());
var_dump(StringsBodnariuc::maxBodnariuc());
var_dump(StringsBodnariuc::minBodnariuc());
var_dump(StringsBodnariuc::absBodnariuc());
var_dump(StringsBodnariuc::minusBodnariuc());
var_dump(StringsBodnariuc::plusBodnariuc());
var_dump(StringsBodnariuc::delenoBodnariuc());
var_dump(StringsBodnariuc::kratBodnariuc());
var_dump(StringsBodnariuc::number_formatBodnariuc());
?>