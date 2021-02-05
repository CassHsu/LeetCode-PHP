<?php
class Solution {
    function strStr($haystack, $needle) {
        $nSize = strlen($needle);
        $hSize = strlen($haystack);
        if ($nSize === 0 || $haystack === $needle) return 0;
        
        $diff = $hSize - $nSize;
        $p = 0;
        while ($p <= $diff) {
            if (substr($haystack, $p, $nSize) === $needle) {
                return $p;
            } else {
                $p++;
            }
        }
        return -1;
    }
}