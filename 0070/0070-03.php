<?php
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if ($n === 1) return 1;
        
        $prev = 1;
        $curr = 2;
        for ($i = 3; $i <= $n; $i++) {
            $tmp = $prev + $curr;
            $prev = $curr;
            $curr = $tmp;
        }
        return $curr;
    }
}
