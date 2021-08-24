<?php
class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    var $ans;
    function combine($n, $k) {
        $this->ans = array();
        $this->backtrack(array(), 1, $n, $k);
        return $this->ans;
    }
    
    function backtrack($curr, $start, $n, $k) {
        if (count($curr) === $k) {
            array_push($this->ans, $curr);
						return;
        }
        
        for ($i = $start; $i <= $n; $i++) {
            array_push($curr, $i);
            $this->backtrack($curr, $i + 1, $n, $k);
            array_pop($curr);
        }
    }
}
