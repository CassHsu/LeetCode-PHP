<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arraySign($nums) {
        $p = 1;
        foreach ($nums as $n) {
            $p *= $n;
        }
        return $this->signFunc($p);
    }
    
    function signFunc($p) {
        if ($p > 0) return 1;
        else if ($p < 0) return -1;
        else return 0;
    }
}
