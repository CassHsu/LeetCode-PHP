<?php
class Solution {
    /**
     * @param String[] $ops
     * @return Integer
     */
    function calPoints($ops) {
        $stack = array();
        
        foreach ($ops as $op) {
            $n = count($stack);
            
            if ($op === "+") {
                array_push($stack, $stack[$n - 1] + $stack[$n - 2]);
                
            } else if ($op === "C") {
                array_pop($stack);
                
            } else if ($op === "D") {
                array_push($stack, 2 * $stack[$n - 1]);
                
            } else {
                array_push($stack, intval($op));
            }
        }
        return array_sum($stack);
    }
}
