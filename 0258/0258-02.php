<?php
class Solution {
    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        if ($num == 0) return 0;
        $m9 = $num % 9;
        if ($m9 == 0) return 9;
        return $m9;
    }
}
