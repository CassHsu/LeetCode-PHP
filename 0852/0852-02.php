<?php
class Solution {
    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function peakIndexInMountainArray($arr) {
        $l = 0;
        $h = count($arr) - 1;
        
        while ($l < $h) {
            $m = floor(($l + $h) / 2);
            if ($arr[$m] < $arr[$m + 1]) {
                $l = $m + 1;
            } else {
                $h = $m;
            }
        }
        
        return $l;
    }
}
