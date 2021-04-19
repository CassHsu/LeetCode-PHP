<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minOperations($nums) {
        $count = 0;
        $prev = 0;
        
        foreach ($nums as $n) {
            if ($prev >= $n) {
                $prev++;
                $count += $prev - $n;
            } else {
                $prev = $n;
            }
        }
        return $count;
    }
}
