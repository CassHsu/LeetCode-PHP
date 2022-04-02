<?php
class Solution {
    function reverseString(&$s) {
        $l = 0;
        $r = count($s) - 1;
        
        while($l < $r) {
            $t = $s[$l];
            $s[$l] = $s[$r];
            $s[$r] = $t;
            $l++;
            $r--;
        }
    }
}
