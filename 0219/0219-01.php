<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $m = array();
        foreach ($nums as $i=>$n) {
            if ($m[$n]) {
                if ($i <= $m[$n]) return true;
            }
            $m[$n] = $i + $k;
        }
        return false;
    }
}
