<?php
class Solution {
    /**
     * @param Integer[] $cost
     * @return Integer
     */
    private $cache;
    
    function minCostClimbingStairs($cost) {
        $this->cache = array();
        return $this->minCost($cost, count($cost));
    }
    
    function minCost($cost, $i) {
        if ($i <= 1) return 0;
        if ($this->cache[$i] !== null) return $this->cache[$i];
        
        $s1 = $cost[$i-1] + $this->minCost($cost, $i-1);
        $s2 = $cost[$i-2] + $this->minCost($cost, $i-2);
        $this->cache[$i] = min($s1, $s2);
        return $this->cache[$i];
    }
}
