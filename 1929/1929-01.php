<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
        $ans = array();
        
        foreach ($nums as $n) {
            array_push($ans, $n);
        }
        
        foreach ($nums as $n) {
            array_push($ans, $n);
        }
        
        return $ans;
    }
}
