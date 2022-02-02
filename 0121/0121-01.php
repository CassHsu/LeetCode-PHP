<?php
class Solution {
    function maxProfit($prices) {
        $min_price = $prices[0];
        $max_prof = 0;
        
        foreach ($prices as $p) {
            $min_price = min($min_price, $p);
            $max_prof = max($max_prof, $p - $min_price);
        }
        
        return $max_prof;
    }
}
