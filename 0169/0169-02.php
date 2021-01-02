<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function majorityElement($nums) {
    sort($nums);
    return $nums[floor(count($nums) / 2)];
}
}