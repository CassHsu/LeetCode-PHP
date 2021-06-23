<?php
class Solution {
    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function peakIndexInMountainArray($arr) {
        $pv = $arr[0];
        $pi = 0;
        
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] > $pv) {
                $pv = $arr[$i];
                $pi = $i;
            }
        }
        
        return $pi;
    }
}
