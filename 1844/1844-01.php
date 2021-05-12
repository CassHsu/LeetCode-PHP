<?php
class Solution {
    /**
     * @param String $s
     * @return String
     */
    function replaceDigits($s) {
        for ($i = 1; $i < strlen($s); $i+=2) {
            $s[$i] = chr(ord($s[$i-1]) + intval($s[$i]));
        }
        return $s;   
    }
}
