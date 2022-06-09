<?php
class Solution {
    function removePalindromeSub($s) {
        if (strlen($s) === 0) return 0;
        if ($s === strrev($s)) return 1;
        
        return 2;
    }
}
