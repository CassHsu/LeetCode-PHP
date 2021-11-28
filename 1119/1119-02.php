<?php
class Solution {
    function removeVowels($s) {
        $ans = "";
        
        foreach (str_split($s) as $c) {
            if ($c === "a" || $c === "e" || $c === "i" || $c === "o" || $c === "u") {
                continue;
            } else {
                $ans .= $c;
            }
        }
        
        return $ans;
    }
}
