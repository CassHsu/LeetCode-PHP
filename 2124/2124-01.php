<?php
class Solution {
    function checkString($s) {
        $a = 0;
        $size = strlen($s);
        $b = $size;
        
        for ($i = 0; $i < $size; $i++) {
            if ($s[$i] == "a") {
                $a = $i;
            } else if ($b === $size) {
                $b = $i;
            }
        }
        
        return $a <= $b;
    }
}
