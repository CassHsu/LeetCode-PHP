<?php
class Solution {
    function countLetters($s) {
        $count = 1;
        $dp = 1;
        
        for ($i = 1; $i < strlen($s); $i++) {
            if ($s[$i - 1] === $s[$i]) $dp++;
            else $dp = 1;
            
            $count += $dp;
        }
        
        return $count;
    }
}
