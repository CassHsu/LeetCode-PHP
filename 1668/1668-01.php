<?php
class Solution {

    /**
     * @param String $sequence
     * @param String $word
     * @return Integer
     */
    function maxRepeating($sequence, $word) {
        $count = 0;
        $repeat = $word;
        
        while (strpos($sequence, $repeat) !== false) {
            $count++;
            $repeat .= $word;
        }
        
        return $count;
    }
}