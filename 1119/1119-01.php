<?php
class Solution {
    function removeVowels($s) {
        $ans = "";
        $vowels = array("a" => true, "e" => true, "i" => true, "o" => true, "u" => true);
        
        foreach (str_split($s) as $c) {
            if ($vowels[$c] == false) $ans .= $c;
        }
        
        return $ans;
    }
}
