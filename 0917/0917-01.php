<?php
class Solution {
    /**
     * @param String $s
     * @return String
     */
    function reverseOnlyLetters($s) {
        $ret = array();
        $j = strlen($s) - 1;
        
        for ($i = 0; $i < strlen($s); $i++) {
            if (ctype_alpha($s[$i])) {
                while (ctype_alpha($s[$j]) == false) {
                    $j--;
                }
                
                array_push($ret, $s[$j]);
                $j--;
                
            } else {
                array_push($ret, $s[$i]);
            }
        }
        
        return join("", $ret);
    }
}
