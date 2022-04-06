<?php
class Solution {
    function maxArea($height) {
        $ans = 0;
        $l = 0;
        $r = count($height) - 1;
        
        while ($l < $r) {
            $area = ($r - $l) * min($height[$l], $height[$r]);
            $ans = max($ans, $area);
            
            if ($height[$l] < $height[$r]) $l++;
            else $r--;
        }
        
        return $ans;
    }
}
