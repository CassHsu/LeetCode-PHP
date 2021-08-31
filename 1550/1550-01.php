<?php
class Solution {
    function threeConsecutiveOdds($arr) {
        $count = 0;
        
        foreach ($arr as $a) {
            if ($a % 2 != 0) {
                $count++;
                if ($count === 3) return true;
                
            } else {
                $count = 0;
            }
        }
        
        return false;
    }
}
