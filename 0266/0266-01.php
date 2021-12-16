<?php
class Solution {
    function canPermutePalindrome($s) {
        $count = 0;
        $m = array();
        
        for ($i = 0; $i < strlen($s); $i++) {
            $v = $m[$s[$i]];
            if ($v) {
                $m[$s[$i]] = $v + 1;
            } else {
                $m[$s[$i]] = 1;
            }
        }
        
        foreach ($m as $v) {
            $count += $v % 2;
        }
        
        return $count <= 1;
    }
}
