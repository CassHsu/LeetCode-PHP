<?php
class Solution {
    function getMinDistance($nums, $target, $start) {
        $ans = 100000;
        foreach ($nums as $i => $n) {
            if ($n === $target) {
                $ans = min($ans, abs($i - $start));
            }
        }
        return $ans;
    }
}
