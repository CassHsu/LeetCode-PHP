<?php
class Solution {

    /**
     * @param String[] $patterns
     * @param String $word
     * @return Integer
     */
    function numOfStrings($patterns, $word) {
        $count = 0;
        
        foreach ($patterns as $p) {
            if (strpos($word, $p) !== false) $count++;
        }
        
        return $count;
    }
}
