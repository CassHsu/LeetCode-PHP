<?php
class Solution {
    function getMaximumGenerated($n) {
        if ($n == 0) return 0;
        
        $dp = array();
        for ($i = 0; $i < $n + 1; $i++) {
            $dp[$i] = 0;
        }
        $dp[1] = 1;
        $m = floor(($n + 1) / 2);
        for ($i = 0; $i < $m; $i++) {
            $dp[2 * $i] = $dp[$i];
            $dp[(2 * $i) + 1] = $dp[$i] + $dp[$i + 1];
        }
        
        return max($dp);
    }
}
