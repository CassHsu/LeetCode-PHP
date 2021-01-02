<?php
class Solution {
    function twoSum($nums, $target) {
        $res = array();
        $m = array();
        
        for ($i = 0; $i < count($nums); $i++) {
            if (array_key_exists($nums[$i], $m)) {
                array_push($res, $m[$nums[$i]]);
                array_push($res, $i);
                break;
            }
            $m[$target - $nums[$i]] = $i;
        }
        
        return $res;
    }
}