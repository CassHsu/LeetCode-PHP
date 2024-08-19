<?
class Solution {
    function canAliceWin($nums) {
        $s = 0;
        $d = 0;

        foreach ($nums as $n) {
            if (strlen((string)$n) == 1) {
                $s += $n;
            } else {
                $d += $n;
            }
        }

        return $s != $d;
    }
}
