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
        $d = $num;
        while ($d > 0) {
            $r = $d % 10;
            $d = floor($d / 10);
            if ($r === 0 || $num % $r !== 0) return false;
        }
        return true;
    }
}
