<?php
class Solution {
    function removeDuplicates($s) {
        $stack = array();
        
        for ($i = 0; $i < strlen($s); $i++) {
            if ($i > 0 && $stack[count($stack) - 1] == $s[$i]) {
                array_pop($stack);
            } else {
                array_push($stack, $s[$i]);
            }
        }
        
        $res = implode("", $stack);
        return $res;
    }
}
