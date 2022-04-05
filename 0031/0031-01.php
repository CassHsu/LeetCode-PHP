<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function nextPermutation(&$nums) {
        $i = count($nums) - 2;
        while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) $i--;
        
        if ($i >= 0) {
            $j = count($nums) - 1;
            while ($nums[$j] <= $nums[$i]) $j--;
            
            $this->swap($nums, $i, $j);
        }
        
        $i += 1;
        $j = count($nums) -1;
        while ($i < $j) {
            $this->swap($nums, $i, $j);
            $i++;
            $j--;
        }
    }
    
    function swap(&$nums, $i, $j) {
        $t = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $t;
    }
}
