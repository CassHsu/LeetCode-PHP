<?php
class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $ans = 0;
        
        foreach ($operations as $op) {
            if ($op === "--X" || $op === "X--") $ans--;
            if ($op === "++X" || $op === "X++") $ans++;
        }
        
        return $ans;
    }
}
