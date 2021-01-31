<?php
class Solution {
    function searchInsert($nums, $target) {
        $size = count($nums);
        if ($target > $nums[$size - 1]) return $size;
        $res = 0;
        for ($i = 0; $i < $size; $i++) {
            if ($nums[$i] >= $target) {
                $res = $i;
                break;
            }
        }
        return $res;
    }
}