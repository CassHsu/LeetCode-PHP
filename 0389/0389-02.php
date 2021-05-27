<?php
class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $ms = array();
        $mt = array();
        
        for ($i = 0; $i < strlen($s); $i++) {
            $k = $s[$i];
            if (array_key_exists($k, $ms)) {
                $ms[$k] += 1;
            } else {
                $ms[$k] = 1;
            }
        }
        
        for ($i = 0; $i < strlen($t); $i++) {
            $k = $t[$i];
            if (array_key_exists($k, $mt)) {
                $mt[$k] += 1;
            } else {
                $mt[$k] = 1;
            }
        }
        
        foreach ($mt as $k=>$v) {
            if (!array_key_exists($k, $ms)) return $k;
            if ($ms[$k] != $v) return $k;
        }
        
        return $t[0];
    }
}
