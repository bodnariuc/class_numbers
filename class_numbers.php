<?php

declare(strict_types = 1);

class NumbersLukasBodnariuc{
    
    /**
     * 
     * @param float $cislo
     * @param type $presnost
     * @return type
     */
    public static function roundLukasBodnariuc(float $cislo, $presnost = NULL) {
        
        if (is_null($presnost)) {
            return round($cislo);
        }
        else {
            return round($cislo, $presnost);
        }
    }
    
    /**
     * 
     * @param type $cislo
     * @return type
     */
    public static function ceilLukasBodnariuc($cislo) {
        
        return ceil($cislo);
    }
    
    /**
     * 
     * @param type $cislo
     * @return type
     */
    public static function floorLukasBodnariuc($cislo) {
        
        return floor($cislo);
    }
    
    /**
     * 
     * @param type $cislo
     * @return type
     */
    public static function sqrtLukasBodnariuc($cislo) {
        
        return sqrt($cislo);
    }
    
    /**
     * 
     * @param type $cislo
     * @param type $exponent
     * @return type
     */
    public static function powLukasBodnariuc($cislo, $exponent) {
        
        return pow($cislo, $exponent);
    }
    
    /**
     * 
     * @param float $cislo
     * @return float
     */
    public static function sinLukasBodnariuc(float $cislo): float {
        
        return sin($cislo);
    }
    
    /**
     * 
     * @param float $cislo
     * @return float
     */
    public static function cosLukasBodnariuc(float $cislo): float {
        
        return cos($cislo);
    }
    
    /**
     * 
     * @param float $cislo
     * @return float
     */
    public static function tanLukasBodnariuc(float $cislo): float {
        
        return tan($cislo);
    }
    
    /**
     * 
     * @param float $cislo
     * @return float
     */
    public static function asinLukasBodnariuc(float $cislo): float {
        
        return asin($cislo);
    }
    
    /**
     * 
     * @param float $cislo
     * @return float
     */
    public static function acosLukasBodnariuc(float $cislo): float {
        
        return acos($cislo);
    }
    
    /**
     * 
     * @param float $cislo
     * @return float
     */
    public static function atanLukasBodnariuc(float $cislo): float {
        
        return atan($cislo);
    }
    
    /**
     * 
     * @param float $cislo1
     * @param float $cislo2
     * @return float
     */
    public static function fmodLukasBodnariuc(float $cislo1, float $cislo2): float {
        
        return fmod($cislo1, $cislo2);
    }
    
    /**
     * 
     * @param array $cisla
     * @return type
     */
    public static function maxLukasBodnariuc(array $cisla) {
        
        return max($cisla);
    }
    
    /**
     * 
     * @param array $cisla
     * @return type
     */
    public static function minLukasBodnariuc(array $cisla) {
        
        return min($cisla);
    }
    
    /**
     * 
     * @param type $cislo
     * @return type
     */
    public static function absLukasBodnariuc($cislo) {
        
        return abs($cislo);
    }
    
    /**
     * 
     * @param type $cislo1
     * @param type $cislo2
     * @return type
     */
    public static function subtrLukasBodnariuc($cislo1, $cislo2) {
        
        return ($cislo1 - $cislo2);
    }
    
    /**
     * 
     * @param type $cislo1
     * @param type $cislo2
     * @return type
     */
    public static function addLukasBodnariuc($cislo1, $cislo2) {
        
        return ($cislo1 + $cislo2);
    }
    
    /**
     * 
     * @param type $cislo1
     * @param type $cislo2
     * @return type
     */
    public static function divLukasBodnariuc($cislo1, $cislo2) {
        
        return ($cislo1 / $cislo2);
    }
    
    /**
     * 
     * @param type $cislo1
     * @param type $cislo2
     * @return type
     */
    public static function multiLukasBodnariuc($cislo1, $cislo2) {
        
        return ($cislo1 * $cislo2);
    }
    
    /**
     * 
     * @param float $cislo
     * @param type $decimal
     * @param type $znamenko
     * @param type $oddelovac
     * @return string
     */
    public static function number_formatLukasBodnariuc(float $cislo, $decimal = NULL, $znamenko = NULL, $oddelovac = NULL): string {
        
        if (!empty($decimal) && is_null($znamenko) && is_null($oddelovac)){
            return number_format($cislo, $decimal);
        }
        else if (!empty($decimal) && !empty($znamenko) && !empty($oddelovac)){
            return number_format($cislo, $decimal, $znamenko, $oddelovac);
        }
        else {
            return ($cislo);
        }
    } 
}

?>
