<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $ans = array();
        
        foreach ($nums as $n) {
            array_push($ans, $nums[$n]);
        }
        
        return $ans;
    }
}
