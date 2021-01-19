<?php
class Solution {
    function containsDuplicate($nums) {
        $m = array();
        foreach ($nums as $n) {
            if (array_key_exists($n, $m)) return true;
            $m[$n] = true;
        }
        return false;
    }
}