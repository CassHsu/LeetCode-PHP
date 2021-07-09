<?php
class Solution {
    /**
     * @param Integer[] $aliceSizes
     * @param Integer[] $bobSizes
     * @return Integer[]
     */
    function fairCandySwap($aliceSizes, $bobSizes) {
        $sa = array_sum($aliceSizes);
        $sb = array_sum($bobSizes);
        $t = ($sb - $sa) / 2;
        $ret = array();
        
        for ($i = 0; $i < count($bobSizes); $i++) {
            if (in_array($bobSizes[$i] - $t, $aliceSizes)) {
                array_push($ret, $bobSizes[$i] - $t);
                array_push($ret, $bobSizes[$i]);
                return $ret;
            }
        }
                
        return $ret;
    }
}
