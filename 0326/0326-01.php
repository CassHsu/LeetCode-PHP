<?php
class Solution {
    function isPowerOfThree($n) {
        $p = 1;
        for ($i = 0; $i < 31; $i++) {
            if ($p == $n) return true;
            $p *= 3;
        }
        return false;
    }
}