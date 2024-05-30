<?php
class Solution {
    function longestMonotonicSubarray($nums) {
        $n = count($nums);
        $mx = 1;
        $up = 1;
        $dn = 1;
        
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] > $nums[$i - 1]) {
                $up++;
                $dn = 1;
            } elseif ($nums[$i] < $nums[$i - 1]) {
                $dn++;
                $up = 1;
            } else {
                $up = 1;
                $dn = 1;
            }
            
            $mx = max($mx, $up, $dn);
        }
        
        return $mx;
    }
}
