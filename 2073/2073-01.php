<?php
class Solution {
    function timeRequiredToBuy($tickets, $k) {
        $ans = 0;
        $n = count($tickets);
        $count = $tickets[$k];
        
        for ($r = 0; $r < $count; $r++) {
            for ($c = 0; $c < $n; $c++) {
                if ($r == $count - 1 && $c > $k) break;
                if ($tickets[$c] > 0) {
                    $tickets[$c]--;
                    $ans++;
                }
            }
        }
        
        return $ans;
    }
}
