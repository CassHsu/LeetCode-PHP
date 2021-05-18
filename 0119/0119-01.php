<?php
class Solution {
    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        $ret = array();
        
        for ($i = 0; $i <= $rowIndex; $i++) {
            $row = array_fill(0, $i+1, 1);
            for ($j = 1; $j < $i; $j++) {
                $row[$j] = $ret[$i-1][$j-1] + $ret[$i-1][$j];
            }
            array_push($ret, $row);
        }
        return $ret[$rowIndex];
    }
}
