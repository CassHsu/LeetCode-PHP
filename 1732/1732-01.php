<?php
class Solution {
    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $max = 0;
        $last = 0;
        foreach ($gain as $g) {
            $last = $last + $g;
            if ($last > $max) $max = $last;
        }
        return $max;
    }
}
