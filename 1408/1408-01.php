<?php
class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function stringMatching($words) {
        $ans = [];
        $size = count($words);
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                if ($i !== $j && strlen($words[$j]) > strlen($words[$i])) {
                    if (strpos($words[$j], $words[$i]) !== false) {
                        if (!in_array($words[$i], $ans)) {
                            array_push($ans, $words[$i]);
                        }
                    }
                }
            }
        }
        return $ans;
    }
}
