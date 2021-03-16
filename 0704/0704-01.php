<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $l = 0;
        $r = count($nums) - 1;
        while ($l <= $r) {
            $mid = floor(($l + $r) / 2);
            if ($nums[$mid] === $target) return $mid;
            
            if ($target < $nums[$mid]) {
                $r = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }
        return -1;
    }
}
