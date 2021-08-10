<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function getLucky($s, $k) {
        $ts = $this->convert($s);
        
        while ($k > 0) {
            $ts = $this->transform($ts);
            $k--;
        }
        
        return intval($ts);
    }
    
    function convert($s) {
        $ret = "";
        for ($i = 0; $i < strlen($s); $i++) {
            $ret .= strval((ord($s[$i]) - ord('a')) + 1);
        }
        return $ret;
    }
    
    function transform($s) {
        $sum = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $sum += intval($s[$i]);
        }
        
        return strval($sum);
    }
}
