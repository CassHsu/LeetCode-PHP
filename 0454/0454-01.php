<?php
class Solution {
    function fourSumCount($nums1, $nums2, $nums3, $nums4) {
        $count = 0;
        $m = array();
        
        foreach ($nums1 as $n1) {
            foreach ($nums2 as $n2) {                
                $n = $n1 + $n2;
                if (array_key_exists($n, $m)) {
                    $m[$n]++;
                } else {
                    $m[$n] = 1;
                }
            }
        }
        
        foreach ($nums3 as $n3) {
            foreach ($nums4 as $n4) {
                $n = -($n3 + $n4);
                if (array_key_exists($n, $m)) {
                    $count += $m[$n];
                }
            }
        }
        
        return $count;
    }
}
