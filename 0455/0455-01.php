<?
class Solution {
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);

        $ans = 0;
        $gi = count($g) - 1;
        $si = count($s) - 1;

        while ($si >= 0 && $gi >= 0) {
            if ($s[$si] >= $g[$gi]) {
                $ans++;
                $si--;
                $gi--;
            } else {
                $gi--;
            }
        }
        return $ans;
    }
}
