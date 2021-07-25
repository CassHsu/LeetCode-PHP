<?php
class Solution {
    /**
     * @param String $text
     * @param String $brokenLetters
     * @return Integer
     */
    function canBeTypedWords($text, $brokenLetters) {
        $texts = explode(" ", $text);
        $brokens = str_split($brokenLetters);
        
        $ans = count($texts);
        
        foreach ($texts as $t) {
            foreach ($brokens as $b) {
                if (strpos($t, $b) !== false) {
                    $ans--;
                    break;
                }
            }
        }
        
        return $ans;
    }
}
