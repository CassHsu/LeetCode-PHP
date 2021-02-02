<?php
class Solution {
    function removeDuplicates(&$nums) {
        $size = count($nums);
        if ($size <= 1) return $size;
        $p = 0;
        for ($i = 1; $i < $size; $i++) {
            if ($nums[$i] != $nums[$p]) {
                $p += 1;
                $nums[$p] = $nums[$i];
            }
        }
        return $p + 1;
    }
}