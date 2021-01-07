<?php
class Solution {
    function maxLengthBetweenEqualCharacters($s) {
        $ans = -1;
        $m = array_map();
        
        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];
            if ($m[$c] == null) {
                $m[$c] = strval($i);
            } else {
                $ans = max($ans, $i - intval($m[$c]) - 1);
            }
        }
        return $ans;
    }
}