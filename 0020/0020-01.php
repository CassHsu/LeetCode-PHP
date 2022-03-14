<?php
class Solution {
    function isValid($s) {
        if (strlen($s) == 0) return true;
        
        $stack = array();
        $m = array();
        $m['('] = ')';
        $m['['] = ']';
        $m['{'] = '}';
        
        foreach (str_split($s) as $c) {
            $size = count($stack);
            if ($size > 0 && $m[$stack[$size - 1]] === $c) {
                array_pop($stack);
            } else {
                array_push($stack, $c);
            }
        }
        
        
        return count($stack) == 0;
    }
}
