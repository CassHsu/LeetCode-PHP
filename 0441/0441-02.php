<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $k = 1;
        
        while ($n >= $k) {
            $n -= $k;
            $k++;
        }
        
        return $k - 1;
    }
}
