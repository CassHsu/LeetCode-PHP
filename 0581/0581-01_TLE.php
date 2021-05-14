<?php
class Solution {
    /**
     * @param Integer[] $nums22
     * @return Integer
     */
    function findUnsortedSubarray($nums) {
        $size = count($nums);
        $r = 0;
        $l = $size;
        
        for ($i = 0; $i < $size - 1; $i++) {
            for ($j = $i + 1; $j < $size; $j++) {
                if ($nums[$j] < $nums[$i]) {
                    $r = max($r, $j);
                    $l = min($l, $i);
                }
            }
        }
        return $r - $l > 0 ? $r - $l + 1 : 0;
    }
}
