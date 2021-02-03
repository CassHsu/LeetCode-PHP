<?php
class Solution {
    function countAndSay($n) {
        if ($n === 1) return "1";
        
        $cs = $this->countAndSay($n - 1);
        $init = $cs[0];
        $count = 0;
        $res = "";
        
        $size = strlen($cs);
        for ($i = 0; $i < $size; $i++) {
            if ($cs[$i] === $init) {
                $count++;
            } else {
                $res .= $count . $init;
                $count = 1;
                $init = $cs[$i];
            }
        }
        $res .= $count . $init;
        return $res;
    }
}