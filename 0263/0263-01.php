<?php
class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isUgly($n) {
        if ($n === 0) return false;
        
        $uglys = array(2, 3, 5);
        foreach ($uglys as $u) {
            while ($n % $u === 0) {
                $n /= $u;
            }   
        }
        return $n === 1;
    }
}
