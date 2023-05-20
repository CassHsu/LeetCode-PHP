<?php
class Solution {
    function diagonalSum($mat) {
        $ans = 0;

        for ($l = 0, $r = count($mat) - 1; $l < count($mat); $l++, $r--) {
            if ($l == $r) {
                $ans += $mat[$l][$r];
            } else {
                $ans += $mat[$l][$r];
                $ans += $mat[$l][$l];
            }
        }

        return $ans;
    }
}
