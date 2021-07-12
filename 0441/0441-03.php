<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $l = 0;
        $r = $n;
        
        while ($l <= $r) {
            $m = floor(($l + $r) / 2);
            $curr = $m * ($m + 1) / 2;
            
            if ($curr === $n) return $m;
            
            if ($n < $curr) {
                $r = $m - 1;
            } else {
                $l = $m + 1;
            }
        }
        
        return $r;
    }
}
