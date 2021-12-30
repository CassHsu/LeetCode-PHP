<?php
class Solution {
    function countPoints($rings) {
        $count = 0;
        $m = array();
        
        for ($i = 0, $j = 1; $j < strlen($rings); $i += 2, $j += 2) {
            if (array_key_exists($rings[$j], $m)) $m[$rings[$j]] .= $rings[$i];
            else $m[$rings[$j]] = $rings[$i];
        }
        
        foreach ($m as $colors) {
            if (strlen($colors) < 3) continue;
            
            $r = false;
            $g = false;
            $b = false;
            
            for ($i = 0; $i < strlen($colors); $i++) {
                if ($colors[$i] === 'R') $r = true;
                if ($colors[$i] === 'G') $g = true;
                if ($colors[$i] === 'B') $b = true;
                
                if ($r && $g && $b) {
                    $count++;
                    break;
                }
            }
        }
        
        return $count;
    }
}
