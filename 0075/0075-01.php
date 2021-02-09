<?php
class Solution {
    function sortColors(&$nums) {
        $isConti = true;
        $stop = 1;
        while ($isConti) {
            $isConti = false;
            $count = count($nums) - $stop;
            for ($i = 0; $i < $count; $i++) {
                if ($nums[$i] > $nums[$i+1]) {
                    $tmp = $nums[$i+1];
                    $nums[$i+1] = $nums[$i];
                    $nums[$i] = $tmp;
                    $isConti = true;
                }
            }
            $stop++;
        }
    }
}