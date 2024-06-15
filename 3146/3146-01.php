<?
class Solution {
    function findPermutationDifference($s, $t) {
        $ans = 0;
        $m = [];

        for ($i = 0; $i < strlen($t); $i++) {
            $m[$t[$i]] = $i;
        }

        for ($i = 0; $i < strlen($s); $i++) {
            $ans += abs($m[$s[$i]] - $i);
        }

        return $ans;
    }
}
