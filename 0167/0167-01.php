<?php
class Solution {
    function twoSum($numbers, $target) {
        $l = 0;
        $r = count($numbers) - 1;
        
        while ($l < $r) {
            $sum = $numbers[$l] + $numbers[$r];
            
            if ($sum === $target) {
                return [$l + 1, $r + 1];
            } else if ($sum < $target) {
                $l++;
            } else {
                $r--;
            }
        }
        
        return [-1, -1];
    }
}
