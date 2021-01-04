<?php
class Solution {
    function coinChange($coins, $amount) {
        if ($amount === 0 || count($coins) === 0) {
            return 0;
        }
        
        $add1 = $amount + 1;
        $cache = array();
        
        $cache[0] = 0;
        for ($i = 1; $i <= $amount; $i++) {
            $cache[$i] = $add1;
        }
        
        foreach ($coins as $c) {
            for ($i = $c; $i <= $amount; $i++) {
                $cache[$i] = min($cache[$i - $c] + 1, $cache[$i]);
            }
        }
        
        return $cache[$amount] >= $add1 ? -1 : $cache[$amount];
    }
}