<?php
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    var $cache;
    function climbStairs($n) {
        $this->cache = array_fill(0, $n+1, 0);
        return $this->climb1or2(0, $n);
    }
    
    function climb1or2($i, $n) {
        if ($i > $n) return 0;
        if ($i === $n) return 1;
        if ($this->cache[$i] > 0) return $this->cache[$i];
        
        $this->cache[$i] = $this->climb1or2($i+1, $n) + $this->climb1or2($i+2, $n);
        return $this->cache[$i];
    }
}
