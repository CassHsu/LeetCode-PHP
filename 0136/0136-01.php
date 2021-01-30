<?php
class Solution {
    function singleNumber($nums) {
        $res = 0;
        foreach ($nums as $n) {
            $res ^= $n;
        }
        return $res;
    }
}