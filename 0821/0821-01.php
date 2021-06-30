<?php
class Solution {
    /**
     * @param String $s
     * @param String $c
     * @return Integer[]
     */
    function shortestToChar($s, $c) {
        $ans = array();
        for ($i = 0; $i < strlen($s); $i++) {
            $ans[$i] = INF;
        }
        
        $prev = -1;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === $c) $prev = $i;
            if ($prev >= 0) $ans[$i] = $i - $prev;
        }
        
        $prev = -1;
        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            if ($s[$i] === $c) $prev = $i;
            if ($prev >= 0) $ans[$i] = min($ans[$i], $prev - $i);
        }
        
        return $ans;
    }
}
