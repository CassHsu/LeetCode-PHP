<?php
class Solution {
    function countAsterisks($s) {
        $count = 0;
        $bars = 0;
        
        foreach (str_split($s) as $c) {
            echo($c);
            switch ($c) {
                case '*':
                    if ($bars % 2 == 0) $count++;
                    break;
                case '|':
                    $bars++;
            }
        }
        
        return $count;
    }
}
