<?php
class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function repeatedSubstringPattern($s) {
        $size = strlen($s);
        if ($size == 0) return false;
        
        $ss = $s . $s;
        $ss = substr($ss, 1, $size*2-2);
        if (strpos($ss, $s) === false) {
            return false;
        } else {
            return true;
        }
    }
}
