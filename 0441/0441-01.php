<?php
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $count = 0;
        
        for ($i = 1; $i <= $n; $i++) {
            $count += $i;
            
            if ($count > $n) {
                return $i - 1;
            } else if ($count == $n) {
                return $i;
            }
        }
        
        return 0;
    }
}
