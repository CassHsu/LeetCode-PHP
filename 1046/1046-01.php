<?php
class Solution {
    function lastStoneWeight($stones) {
        if (count($stones) === 1) return $stones[0];
        
        rsort($stones);
        $m1 = array_shift($stones);
        $m2 = array_shift($stones);
        array_push($stones, $m1 - $m2);
        return $this->lastStoneWeight($stones);
    }
}
