<?php
class Solution {
    var $ans, $k, $n;
    function combinationSum3($k, $n) {
        $this->ans = array();
        $this->k = $k;
        $this->n = $n;
        
        $this->backtrack(array(), 1, $n);
        return $this->ans;
    }
    
    function backtrack($curr, $start, $remain) {
        if (count($curr) === $this->k) {
            if ($remain === 0) {
                array_push($this->ans, $curr);
            }
            return;
        }
        
        for ($i = $start; $i <= 9; $i++) {
            array_push($curr, $i);
            $this->backtrack($curr, $i + 1, $remain - $i);
            array_pop($curr);
        }
    }
}
