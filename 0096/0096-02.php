<?php
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function numTrees($n) {
        $cache = array_fill(0, $n+1, 0);
        $cache[0] = 1;
        $cache[1] = 1;
        
        for ($i = 2; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $cache[$i] += $cache[$j-1] * $cache[$i-$j];
            }
        }
        return $cache[$n];
    }
}
