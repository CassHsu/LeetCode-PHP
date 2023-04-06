<?php
class Solution {
    function shuffle($nums, $n) {
        $ans = array();

        $j = 0;
        $k = $n;
        for ($i = 0; $i < count($nums); $i++) {
            array_push($ans, ($i % 2 == 0 ? $nums[$j++] : $nums[$k++]));
        }

        return $ans;
    }
}
