<?php
class Solution {
    var $nums;
    var $ans;
    var $size;
    function permute($nums) {
        $this->ans = array();
        $this->nums = $nums;
        $this->size = count($nums);
        
        $this->backtrack(array());
        return $this->ans;
    }
    
    function backtrack($curr) {
        if (count($curr) === $this->size) {
            array_push($this->ans, $curr);
            return;
        }
        
        foreach ($this->nums as $n) {
            if (in_array($n, $curr)) continue;
            
            array_push($curr, $n);
            $this->backtrack($curr);
            array_pop($curr);
        }
    }
}
