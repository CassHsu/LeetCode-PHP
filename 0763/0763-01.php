<?php
class Solution {
    /**
     * @param String $S
     * @return Integer[]
     */
    function partitionLabels($S) {
        $size = strlen($S);
        $last = array();
        $ans = array();
        for ($i = 0; $i < $size; $i++) {
            $last[$S[$i]] = $i;
        }
        
        $j = 0;
        $anchor = 0;
        for ($i = 0; $i < $size; $i++) {
            $j = max($j, $last[$S[$i]]);
            if ($i === $j) {
                array_push($ans, $i - $anchor + 1);
                $anchor = $i + 1;
            }
        }
        return $ans;
    }
}
