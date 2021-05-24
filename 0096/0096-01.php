<?php
class Solution {
    private $cache = array();
    
    function numTrees($n) {
        if ($n === 0) return 1;
        if ($this->cache[$n] !== null) return $this->cache[$n];
        
        $ans = 0;
        for ($i = 1; $i <= $n; $i++) {
            $ans += $this->numTrees($i - 1) * $this->numTrees($n - $i);
        }
        
        $this->cache[$n] = $ans;
        return $ans;
    }
}
