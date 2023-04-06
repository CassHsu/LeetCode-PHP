<?php
class Solution {
    function shuffle($nums, $n) {
        $ans = array();

        $j = 0;
        $k = $n;
        for ($i = 0; $i < count($nums); $i++) {
            if ($i % 2 == 0) {
                array_push($ans, $nums[$j]);
                $j++;
            } else {
                array_push($ans, $nums[$k]);
                $k++;
            }
        }

        return $ans;
    }
}
