<?php
class Solution {
    function firstPalindrome($words) {
        $ans = "";
        
        foreach ($words as $w) {
            if ($this->isPalindrome($w)) {
                $ans = $w;
                break;
            }
        }
        
        return $ans;
    }
    
    function isPalindrome($w) {
        $i = 0;
        $j = strlen($w) - 1;
        
        while ($i < $j) {
            if ($w[$i] !== $w[$j]) return false;
            
            $i++;
            $j--;
        }
        
        return true;
    }
}
