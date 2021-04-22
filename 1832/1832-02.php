<?php
class Solution {
    /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence) {
        $size = strlen($sentence);
        if ($size < 26) return false;
        
        $a = ord('a');
        $check = array_fill(0, 26, 0);
        for ($i = 0; $i < $size; $i++) {
            $check[ord($sentence[$i]) - $a]++;
        }
        
        foreach ($check as $v) {
            if ($v === 0) return false;
        }
        
        return true;
    }
}
