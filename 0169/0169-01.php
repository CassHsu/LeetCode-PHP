<?php
class Solution {
    function majorityElement($nums) {
        $ans = 0;
        $size = floor(count($nums) / 2);
        $m = array();
        
        foreach ($nums as $n) {
            $m[$n]++;
            if ($m[$n] > $size) {
                $ans = $n;
                break;
            }
        }
        return $ans;
    }
}