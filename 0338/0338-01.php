<?php
class Solution {
    function countBits($num) {
        $ret = [0];
        for ($i = 1; $i <= $num; $i++) {
            $count = 0;
            for ($offset = 30; $offset >= 0; $offset--) {
                $mask = 1 << $offset;
                if (($i & $mask) > 0) $count++;
            }
            array_push($ret, $count);
        }
        return $ret;
    }
}