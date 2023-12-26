<?php
class Solution {
    function buyChoco($prices, $money) {
        $ans = $money;
        $step = 0;
        $size = count($prices);
        sort($prices);

        for ($i = 0; $i < $size; $i++) {
            $p = $prices[$i];

            if ($p <= $ans) {
                $ans -= $p;
                $step += 1;

                if ($step == 2) return $ans;
            } else return $money;
        }
        return $money;
    }
}
