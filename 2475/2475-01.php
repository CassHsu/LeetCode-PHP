<?php
class Solution {
    function unequalTriplets($nums) {
        $count = 0;
        $size = count($nums);

        for ($i = 0; $i < $size; $i++) {
            for ($j = $i + 1; $j < $size; $j++) {
                for ($k = $j + 1; $k < $size; $k++) {
                    if ($nums[$i] !== $nums[$j] && $nums[$j] !== $nums[$k] && $nums[$i] !== $nums[$k]) {
                        $count++;
                    }
                }
            }
        }

        return $count;
    }
}
