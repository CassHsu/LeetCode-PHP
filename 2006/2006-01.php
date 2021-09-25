<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countKDifference($nums, $k) {
        $count = 0;
        
        for ($i = 0; $i < count($nums) - 1; $i++)
            for ($j = $i + 1; $j < count($nums); $j++)
                if (abs($nums[$i] - $nums[$j]) === $k)
                    $count++;
        
        return $count;
    }
}
