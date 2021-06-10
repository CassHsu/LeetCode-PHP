<?php
class Solution {
    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function replaceElements($arr) {
        $len = count($arr) - 1;
        $max = $arr[$len];
        $arr[$len] = -1;
        
        for ($i = $len - 1; $i >= 0; $i--) {
            $tmp = $max;
            $max = $arr[$i] > $max ? $arr[$i]: $max;
            $arr[$i] = $tmp;
        }
        return $arr;
    }
}
