<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDuplicates($nums) {
        $m = array();
        $ret = array();
        
        foreach ($nums as $n) {
            if ($m[$n] === null) {
                $m[$n] = 1;
            } else {
                if ($m[$n] === 1) {
                    array_push($ret, $n);
                }
                $m[$n]++;
            }
        }
        return $ret;
    }
}
