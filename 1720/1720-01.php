<?php
class Solution {
    function decode($encoded, $first) {
        $ans = array();
        array_push($ans, $first);
        
        foreach ($encoded as $e) {
            array_push($ans, $e ^ $ans[count($ans) - 1]);
        }
        
        return $ans;
    }
}