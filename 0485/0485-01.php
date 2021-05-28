<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $max1 = 0;
        $count = 0;
        
        foreach ($nums as $n) {
            if ($n == 1) $count++;
            else $count = 0;
            
            if ($count > $max1) $max1 = $count;
        }
        return $max1;
    }
}
