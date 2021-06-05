<?php
class Solution {
    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        if ($num === 0) return 0;
        
        while ($num >= 10) {
            $num = intdiv($num, 10) + $num % 10;
        }
        return $num;
    }
}
