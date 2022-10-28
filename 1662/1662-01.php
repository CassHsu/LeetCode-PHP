<?php
class Solution {
    function arrayStringsAreEqual($word1, $word2) {
        $w1 = "";
        $w2 = "";
        
        foreach ($word1 as $w) $w1 .= $w;
        foreach ($word2 as $w) $w2 .= $w;
        
        return $w1 === $w2;
    }
}
