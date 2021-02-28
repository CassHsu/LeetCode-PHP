<?php
class Solution {
    function checkInclusion($s1, $s2) {
        $len1 = strlen($s1);
        $len2 = strlen($s2);
        if ($len1 > $len2) return false;
        
        $a = ord('a');
        $c1 = array();
        $c2 = array();
        for ($i = 0; $i < 26; $i++) {
            $c1[$i] = 0;
            $c2[$i] = 0;
        }
        
        for ($i = 0; $i < $len1; $i++) {
            $c1[ord($s1[$i]) - $a]++;
            $c2[ord($s2[$i]) - $a]++;
        }
        
        $w = $len2 - $len1;
        for ($i = 0; $i < $w; $i++) {
            if ($this->matches($c1, $c2)) return true;
            
            $c2[ord($s2[$i]) - $a]--;
            $c2[ord($s2[$i + $len1]) - $a]++;
        }
        return $this->matches($c1, $c2);
    }
    
    function matches($c1, $c2) {
        for ($i = 0; $i < 26; $i++) {
            if ($c1[$i] !== $c2[$i]) return false;
        }
        return true;
    }
}
