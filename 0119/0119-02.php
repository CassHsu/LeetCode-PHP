<?php
class Solution {
    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        if ($rowIndex == 0) return array(1);
        if ($rowIndex == 1) return array(1, 1);
        
        $last = $this->getRow($rowIndex - 1);
        $row = array(1);
        for ($j = 0; $j < count($last) - 1; $j++) {
            array_push($row, $last[$j] + $last[$j+1]);
        }
        
        array_push($row, 1);
        return $row;
    }
}
