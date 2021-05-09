<?php
class Solution {
    /**
     * @param Integer[] $cost
     * @return Integer
     */
    function minCostClimbingStairs($cost) {
        $size = count($cost) + 1;
        $minCost = array();
        $minCost[0] = 0;
        $minCost[1] = 0;
        
        for ($i = 2; $i < $size; $i++) {
            $s1 = $minCost[$i-1] + $cost[$i-1];
            $s2 = $minCost[$i-2] + $cost[$i-2];
            $minCost[$i] = min($s1, $s2);
        }
        return $minCost[$size - 1];
    }
}
