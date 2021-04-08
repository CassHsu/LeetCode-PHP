<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $slow = 0;
        $fast = 0;
        while (true) {
            $fast = $nums[$fast];
            $fast = $nums[$fast];
            $slow = $nums[$slow];
            
            if ($slow === $fast) {
                $slow = 0;
                break;
            }
        }
        
        while (true) {
            $fast = $nums[$fast];
            $slow = $nums[$slow];
            
            if ($slow === $fast) return $slow;
        }
        return -1;
    }
}
