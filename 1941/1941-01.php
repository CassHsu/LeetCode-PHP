<?php
class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function areOccurrencesEqual($s) {
        $m = array();
        
        for ($i = 0; $i < strlen($s); $i++) {
            $k = $s[$i];
            $v = $m[$k];
            if ($v !== null) $m[$k] = $v + 1;
            else $m[$k] = 1;
        }
        
        $n = $m[$s[0]];
        foreach ($m as $k=>$v) {
            if ($n !== $v) return false;
        }
        
        return true;
    }
}
