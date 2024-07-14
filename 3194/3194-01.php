<?php
class Solution {
    function minimumAverage($nums) {
        sort($nums);
        $l = 0;
        $r = count($nums) - 1;
        $ans = $nums[$r];

        while ($l < $r) {
            $avg = ($nums[$l] + $nums[$r]) / 2.0;
            $ans = min($ans, $avg);
            $l++;
            $r--;
        }

        return $ans;
    }
}
