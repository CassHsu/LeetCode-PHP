<?
class Solution {
    function sumOfMultiples($n) {
        $ans = 0;

        for ($i = 0; $i <= $n; $i++) {
            if ($i % 3 == 0 || $i % 5 == 0 || $i % 7 == 0) {
                $ans += $i;
            }
        }

        return $ans;
    }
}
