<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProductDifference($nums) {
        sort($nums);
        $n = count($nums);
        return ($nums[$n - 1] * $nums[$n - 2]) - ($nums[0] * $nums[1]);
    }
}
