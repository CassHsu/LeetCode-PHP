<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    function isToeplitzMatrix($matrix) {
        $m = array();
        
        foreach ($matrix as $r => $row) {
            foreach ($row as $c => $v) {
                if (array_key_exists($r - $c, $m)) {
                    if ($m[$r - $c] !== $v) return false;
                } else {
                    $m[$r - $c] = $v;
                }
            }
        }
        
        return true;
    }
}
