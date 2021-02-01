<?php
class Solution {
    function searchInsert($nums, $target) {
        $right = 0;
        $left = count($nums);
        while ($left != $right) {
            $mid = intval(($right + $left) / 2);
            if ($target == $nums[$mid]) return $mid;
            if ($target > $nums[$mid]) $right = $mid + 1;
            else $left = $mid;
        }
        return $left;
    }
}