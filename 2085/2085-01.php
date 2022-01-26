<?php
class Solution {
    function countWords($words1, $words2) {
        $count = 0;
        $m = array();
        
        foreach ($words1 as $w) {
            if (array_key_exists($w, $m)) {
                $m[$w]++;
            } else {
                $m[$w] = 1;
            }
        }
        
        foreach ($words2 as $w) {
            if (array_key_exists($w, $m)) {
                if ($m[$w] < 2) $m[$w]--;
            }
        }
        
        foreach ($words1 as $w) {
            if ($m[$w] === 0) $count++;
        }
        
        return $count;
    }
}
