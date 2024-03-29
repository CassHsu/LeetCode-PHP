<?php
class Solution {
    /**
     * @param Integer $num
     * @return Boolean
     */
    function checkPerfectNumber($num) {
        if ($num < 0) return false;
        
        $sum = 0;
        for ($i = 1; $i * $i <= $num; $i++) {
            if ($num % $i === 0) {
                $sum += $i;
                
                if ($i * $i !== $num) {
                    $sum += $num / $i;
                }
            }
        }
        
        return $sum - $num == $num;
    }
}
