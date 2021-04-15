<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumOfUnique($nums) {
        $ans = 0;
        $m = array();
        
        foreach ($nums as $n) {
            $v = $m[$n];
            if (!$v) {
                $m[$n] = 1;
            } else {
                $m[$n] = $v + 1;
            }
        }
        
        foreach ($m as $k => $v) {
            if ($v === 1) {
                $ans += $k;
            }
        }
        
        return $ans;
    }
}
