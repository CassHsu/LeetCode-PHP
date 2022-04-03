<?php
class Solution {
    function validPalindrome($s) {
        $l = 0;
        $r = strlen($s) - 1;
        while ($l < $r) {
            if ($s[$l] !== $s[$r]) {
                return $this->isPalindrome($s, $l + 1, $r) || $this->isPalindrome($s, $l, $r - 1);
            }
            $l++;
            $r--;
        }
        
        return true;
    }
    
    function isPalindrome($s, $i, $j) {
        while ($i < $j) {
            if ($s[$i] !== $s[$j]) return false;
            $i++;
            $j--;
        }
        return true;
    }
}
