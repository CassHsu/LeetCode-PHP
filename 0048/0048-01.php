<?php
class Solution {
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $n = count($matrix);
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i; $j < $n; $j++) {
                $tmp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $tmp;
            }
        }
        
        for ($r = 0; $r < $n; $r++) {
            for ($i = 0, $j = $n - 1; $i < $j; $i++, $j--) {
                $tmp = $matrix[$r][$i];
                $matrix[$r][$i] = $matrix[$r][$j];
                $matrix[$r][$j] = $tmp;
            }
        }
    }
}
