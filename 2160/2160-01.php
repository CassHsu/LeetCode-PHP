<?php
class Solution {
    function minimumSum($num) {
        $nums = array();
        
        for ($i = 0; $i < 4; $i++) {
            array_push($nums, $num % 10);
            $num = $num / 10;
        }
        
        sort($nums);
        
        $n1 = $nums[0] * 10 + $nums[2];
        $n2 = $nums[1] * 10 + $nums[3];
        return $n1 + $n2;
    }
}
