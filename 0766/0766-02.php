<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    function isToeplitzMatrix($matrix) {
        foreach ($matrix as $r => $row) {
            foreach ($row as $c => $v) {
                if ($r > 0 && $c > 0 && $v !== $matrix[$r - 1][$c - 1])
                    return false;
            }
        }
        
        return true;
    }
}
