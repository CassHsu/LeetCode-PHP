<?php
class Solution {
    /**
     * @param Integer[] $widths
     * @param String $s
     * @return Integer[]
     */
    function numberOfLines($widths, $s) {
        $ret = array();
        $lines = 1;
        $width = 0;
        $a = ord('a');
        
        for ($i = 0; $i < strlen($s); $i++) {
            $w = $widths[ord($s[$i]) - $a];
            $width += $w;
            
            if ($width > 100) {
                $lines++;
                $width = $w;
            }
        }
        
        $ret[0] = $lines;
        $ret[1] = $width;
        return $ret;
    }
}
