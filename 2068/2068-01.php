<?php
class Solution {
    function checkAlmostEquivalent($word1, $word2) {
        $counts = array();
        for ($i = 0; $i < 26; $i++) { $counts[$i] = 0; }
        
        for ($i = 0; $i < strlen($word1); $i++) {
            $counts[ord($word1[$i]) - ord('a')]++;
        }
        
        for ($i = 0; $i < strlen($word2); $i++) {
            $counts[ord($word2[$i]) - ord('a')]--;
        }
        
        foreach ($counts as $c) {
            if ($c > 3 || $c < -3) return false;
        }
        
        return true;
    }
}
