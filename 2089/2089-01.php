<?php
class Solution {
    function targetIndices($nums, $target) {
        $ans = array();
        sort($nums);
        
        foreach ($nums as $i => $n) {
            if ($n === $target) {
                array_push($ans, $i);
            }
        }
        
        return $ans;
    }
}
