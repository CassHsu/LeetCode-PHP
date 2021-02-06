<?php
class Solution {
    function isAnagram($s, $t) {
        $sl = strlen($s);
        $tl = strlen($t);
        if ($sl != $tl) return false;
        
        $m = array();
        for ($i = 0; $i < $sl; $i++) {
            $m[$s[$i]]++;
        }
        
        for ($i = 0; $i < $tl; $i++) {
            $m[$t[$i]]--;
        }
        
        foreach ($m as $v) {
            if ($v !== 0) return false;
        }
        return true;
    }
}