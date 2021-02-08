<?php
class Solution {
    function sortColors(&$nums) {
        $count = array(0, 0, 0);
        foreach ($nums as $n) {
            $count[$n]++;
        }
        
        $size = count($nums);
        for ($i = 0; $i < $size; $i++) {
            if ($count[0] > 0) {
                $nums[$i] = 0;
                $count[0]--;
                
            } else if ($count[1] > 0) {
                $nums[$i] = 1;
                $count[1]--;
                
            } else {
                $nums[$i] = 2;
            }
        }
    }
}