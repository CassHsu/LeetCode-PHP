<?php
class Solution {
    /**
     * @param String $coordinates
     * @return Boolean
     */
    function squareIsWhite($coordinates) {
        $x = (ord($coordinates[0]) - ord('a') + 1) % 2;
        $y = (ord($coordinates[1]) - ord('0')) % 2;
        
        return $x ^ $y === 1;
    }
}
