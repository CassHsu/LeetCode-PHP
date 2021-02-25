<?php
class Solution {
    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2) {
        $lenS1 = strlen($s1);
        $lenS2 = strlen($s2);
        
        if ($lenS1 > $lenS2) return false;
        
        $countS1 = $this->array26();
        for ($i = 0; $i < $lenS1; $i++) {
            $countS1[ord($s1[$i]) - ord('a')]++;
        }
        
        for ($i = 0; $i <= $lenS2 - $lenS1; $i++) {
            $countS2 = $this->array26();
            for ($j = 0; $j < $lenS1; $j++) {
                $countS2[ord($s2[$i + $j]) - ord('a')]++;   
            }
            if ($this->match($countS1, $countS2)) return true;
        }
        return false;
    }
    
    function match($c1, $c2) {
        for ($i = 0; $i < 26; $i++) {
            if ($c1[$i] != $c2[$i]) return false;
        }
        return true;
    }
    
    function array26() {
        $ret = array();
        for ($i = 0; $i < 26; $i++) {
            $ret[$i] = 0;
        }
        return $ret;
    }
}
