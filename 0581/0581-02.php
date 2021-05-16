<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findUnsortedSubarray($nums) {
        $size = count($nums);
        $r = 0;
        $l = $size;
        
        $snums = $nums;
        sort($snums);
        
        for ($i = 0; $i < $size; $i++) {
            if ($nums[$i] !== $snums[$i]) {
                $r = max($r, $i);
                $l = min($l, $i);
            }
        }
        return $r - $l > 0 ? $r - $l + 1 : 0;
    }
}
