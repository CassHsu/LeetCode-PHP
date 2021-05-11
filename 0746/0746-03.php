<?php
class Solution {
    /**
     * @param Integer[] $cost
     * @return Integer
     */
    function minCostClimbingStairs($cost) {
        $s1 = 0;
        $s2 = 0;
        
        for ($i = 2; $i <= count($cost); $i++) {
            $tmp = $s1;
            $s1 = min($s1 + $cost[$i-1], $s2 + $cost[$i-2]);
            $s2 = $tmp;
        }
        return $s1;
    }
}
