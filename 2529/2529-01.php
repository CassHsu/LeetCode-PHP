<?php
class Solution {
    function maximumCount($nums) {
        $p = 0;
        $n = 0;

        foreach ($nums as $num) {
            if ($num > 0) {
                $p++;
                continue;
            }

            if ($num < 0) {
                $n++;
                continue;
            }
        }

        if ($p > $n) return $p;
        return $n;
    }
}
