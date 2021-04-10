<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $ret = array();
        array_push($ret, array());
        
        foreach ($nums as $n) {
            $size = count($ret);
            for ($i = 0; $i < $size; $i++) {
                $ss = array();
                foreach ($ret[$i] as $r) {
                    array_push($ss, $r);
                }
                array_push($ss, $n);
                array_push($ret, $ss);
            }
        }
        return $ret;
    }
}
