<?php
class Solution {
    function isArmstrong($n) {
        $total = 0;
        $arr = str_split(strval($n));
        $size = count($arr);
        
        foreach ($arr as $c) {
            $total = $total + pow(intval($c), $size);
        }
        
        return $total === $n;
    }
}
