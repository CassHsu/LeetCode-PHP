<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countGoodSubstrings($s) {
        $count = 0;
        
        for ($i = 1; $i < strlen($s) - 1; $i++) {
            if ($s[$i] !== $s[$i-1] && $s[$i] !== $s[$i+1] && $s[$i-1] !== $s[$i+1]) {
                $count++;
            }
        }
        
        return $count;
    }
}
