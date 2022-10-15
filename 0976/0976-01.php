<?php
class Solution {
    function largestPerimeter($nums) {
        sort($nums);
        
        for ($i = count($nums) - 3; $i > -1; $i--) {
            if ($nums[$i] + $nums[$i + 1] > $nums[$i + 2]) {
                return $nums[$i] + $nums[$i + 1] + $nums[$i + 2];
            }
        }
        
        return 0;
    }
}
