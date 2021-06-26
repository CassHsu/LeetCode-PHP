<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer[][] $queries
     * @return Integer[]
     */
    function sumEvenAfterQueries($nums, $queries) {
        $s = 0;
        $ans = array();
        foreach ($nums as $n) {
            if ($n % 2 == 0) $s += $n;
        }
        
        foreach ($queries as $q) {
            $j = $q[1];
            $k = $q[0];
            
            if ($nums[$j] % 2 === 0) $s -= $nums[$j];
            
            $nums[$j] += $k;
            
            if ($nums[$j] % 2 === 0) $s += $nums[$j];
            
            array_push($ans, $s);
        }
        
        return $ans;
    }
}
