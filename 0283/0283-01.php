<?php
class Solution {
    function moveZeroes(&$nums) {
        $p = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] != 0) {
                if ($i != $p) {
                    $t = $nums[$i];
                    $nums[$i] = $nums[$p];
                    $nums[$p] = $t;
                }
                $p++;
            }
        }
    }
}