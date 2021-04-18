<?php
class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function repeatedSubstringPattern($s) {
        $size = strlen($s);
        for ($i = floor($size/2); $i > 0; $i--) {
            if ($size % $i === 0) {
                $repeat = $size / $i;
                $substr = substr($s, 0, $i);
                $curr = "";
                
                for ($j = 0; $j < $repeat; $j++) {
                    $curr = $curr . $substr;
                }
                
                if ($s === $curr) return true;
            } 
        }
        return false;
    }
}
