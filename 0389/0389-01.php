<?php
class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $size = strlen($s);
        $r = $t[$size];
        for ($i = 0; $i < $size; $i++) {
            $r ^= $s[$i] ^ $t[$i];
        }
        return $r;
    }
}
