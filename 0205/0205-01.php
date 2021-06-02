<?php
class Solution {
    function isIsomorphic($s, $t) {
        $ms = array();
        $mt = array();
        
        for ($i = 0; $i < strlen($s); $i++) {
            if (array_key_exists($s[$i], $ms) == false) $ms[$s[$i]] = $i;
            if (array_key_exists($t[$i], $mt) == false) $mt[$t[$i]] = $i;
            
            if ($ms[$s[$i]] !== $mt[$t[$i]]) return false;
        }
        return true;
    }
}
