<?php
class Solution {
    /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence) {
        $size = strlen($sentence);
        if ($size < 26) return false;
        
        $m = array();
        $alphabet = str_split("abcdefghijklmnopqrstuvwxyz");
        foreach ($alphabet as $a) {
            $m[$a] = 0;
        }
        
        for ($i = 0; $i < $size; $i++) {
            $m[$sentence[$i]]++;
        }
        
        foreach ($m as $k => $v) {
            if ($v === 0) return false;
        }
        
        return true;
    }
}
