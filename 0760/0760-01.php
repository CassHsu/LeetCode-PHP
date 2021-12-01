<?php
class Solution {
    function anagramMappings($nums1, $nums2) {
        $m = array();
        $ans = array();
        
        foreach($nums2 as $i => $n) {
            $m[$n] = $i;
        }
        
        foreach($nums1 as $n) {
            array_push($ans, $m[$n]);
        }
        
        return $ans;
    }
}
