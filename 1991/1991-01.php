<?php
class Solution {
    function findMiddleIndex($nums) {
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            if (array_sum(array_slice($nums, 0, $i)) === array_sum(array_slice($nums, $i+1, $len))) {
                return $i;
            }
        }
        
        return -1;
    }
}
