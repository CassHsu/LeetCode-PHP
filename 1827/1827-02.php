<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minOperations($nums) {
        $count = 0;
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i-1] >= $nums[$i]) {
                $diff = $nums[$i-1] - $nums[$i];
                $diff += 1;
                $nums[$i] += $diff;
                $count += $diff;
            }
        }
        return $count;
    }
}
