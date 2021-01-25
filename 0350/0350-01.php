<?php
class Solution {
    function intersect($nums1, $nums2) {
        $res = array();
        $m = array();
        
        foreach ($nums1 as $n) {
            if (array_key_exists($n, $m)) {
                $m[$n]++;
            } else {
                $m[$n] = 1;
            }
        }
        
        foreach ($nums2 as $n) {
            if (array_key_exists($n, $m) && $m[$n] > 0) {
                array_push($res, $n);
                $m[$n]--;
            }
        }
        
        return $res;
    }
}