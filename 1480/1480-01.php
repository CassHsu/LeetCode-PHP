<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $ret = array($nums[0]);
        for ($i = 1; $i < count($nums); $i++) {
            array_push($ret, $nums[$i] + $ret[$i-1]);
        }
        return $ret;
    }
}
