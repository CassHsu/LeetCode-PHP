<?php
class Solution {
    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right) {
        $ret = array();
        for ($i = $left; $i <= $right; $i++) {
            if ($this->check($i)) array_push($ret, $i);
        }
        return $ret;
    }
    
    function check($num) {
        $strArr = str_split(strval($num));
        foreach ($strArr as $s) {
            if ($s === "0" || $num % intval($s) !== 0) return false;
        }
        return true;
    }
}
