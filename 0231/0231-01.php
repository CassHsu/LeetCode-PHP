<?php
class Solution {
    function isPowerOfTwo($n) {
        $p = 1;
        for ($i = 0; $i < 31; $i++) {
            if ($n === $p) return true;
            $p *= 2;
        }
        
        return false;
    }
}