<?php
class Solution {
    function commonFactors($a, $b) {
        $count = 1;
        $min = min($a, $b);
        
        for ($n = 2; $n <= $min; $n++) {
            if ($a % $n == 0 && $b % $n == 0) {
                $count++;
            }    
        }
        
        return $count;
    }
}
