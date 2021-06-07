<?php
class Solution {
    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $words = explode(" ", $s);
        $size = strlen($pattern);
        if (count($words) !== $size) return false;
        
        $mp = array();
        $mw = array();
        
        
        for ($i = 0; $i < $size; $i++) {
            $p = $pattern[$i];
            $w = $words[$i];
            if (array_key_exists($p, $mp) === false) {
                $mp[$p] = $w;
            } else {
                if ($mp[$p] !== $w) return false;
            }
            
            if (array_key_exists($w, $mw) === false) {
                $mw[$w] = $p;
            } else {
                if ($mw[$w] !== $p) return false;
            }
        }
        
        return true;
    }
}
