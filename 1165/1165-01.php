<?php
class Solution {
    function calculateTime($keyboard, $word) {
        $m = array();
        
        $ks = str_split($keyboard);
        foreach ($ks as $i => $k) {
            $m[$k] = $i;
        }
        
        $count = 0;
        $curr = 0;
        for ($i = 0; $i < strlen($word); $i++) {
            $count += abs($m[$word[$i]] - $curr);
            $curr = $m[$word[$i]];
        }
        
        return $count;
    }
}
