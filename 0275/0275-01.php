<?php
class Solution {
    /**
     * @param Integer[] $citations
     * @return Integer
     */
    function hIndex($citations) {
        $size = count($citations);
        for ($h = $size; $h > 0; $h--) {
            $i = $size - $h;
            if ($citations[$i] >= $h) return $h;
        }
        return 0;
    }
}
