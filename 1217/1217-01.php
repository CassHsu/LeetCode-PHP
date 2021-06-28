<?php
class Solution {
    /**
     * @param Integer[] $position
     * @return Integer
     */
    function minCostToMoveChips($position) {
        $even = 0;
        $odd = 0;
        
        foreach ($position as $v) {
            if ($v % 2 === 0) $even++;
            else $odd++;
        }
        
        return min($even, $odd);
    }
}
