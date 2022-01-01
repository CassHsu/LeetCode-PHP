<?php
class Solution {
    function mostWordsFound($sentences) {
        $max = 0;
        
        foreach ($sentences as $s) {
            $count = count(explode(" ", $s));
            $max = max($max, $count);
        }
        
        return $max;
    }
}
