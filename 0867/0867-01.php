<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[][]
     */
    function transpose($matrix) {
        $ans = array();
        $w = count($matrix[0]);
        $h = count($matrix);
        
        for ($c = 0; $c < $w; $c++) {
            $tmp = array();
            for ($r = 0; $r < $h; $r++) {
                array_push($tmp, $matrix[$r][$c]);
            }
            
            array_push($ans, $tmp);
        }
        
        return $ans;
    }
}
