<?php
class Solution {
    function countElements($nums) {
        $count = 0;
        $max = max($nums);
        $min = min($nums);
        
        foreach ($nums as $n) {
            if ($max > $n && $n > $min) $count++;
        }
        
        return $count;
    }
}
