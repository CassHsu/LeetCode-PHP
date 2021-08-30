<?php
class Solution {
    function maxAscendingSum($nums) {
        $count = $nums[0];
        $ans = $nums[0];
        
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] > $nums[$i-1]) {
                $count += $nums[$i];
            } else {
                $count = $nums[$i];
            }
            
            $ans = max($ans, $count);
        }
        
        return $ans;
    }
}
