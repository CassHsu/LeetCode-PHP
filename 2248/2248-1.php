<?php
class Solution {
    function intersection($nums) {
        $res = [];
        $count = array_fill(0, 1001, 0);
        
        foreach ($nums as $n) {
            foreach ($n as $i) {
                $count[$i]++;
            }
        }
        
        for ($i = 0; $i < 1001; $i++) {
            if ($count[$i] === count($nums)) {
                array_push($res, $i);
            }
        }
        
        return $res;
    }
}
