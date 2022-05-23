<?php
class Solution {
    private $cnt;
    private $size;
    
    function countSubstrings($s) {
        $this->cnt = 0;
        $this->size = strlen($s);
        
        for ($i = 0; $i < $this->size; $i++) {
            $this->twopointers($i, $i, $s);
            $this->twopointers($i, $i + 1, $s);
        }
        
        return $this->cnt;
    }
    
    function twopointers($l, $r, $s) {
        while ($l >= 0 && $r < $this->size && $s[$l] === $s[$r]) {
            $this->cnt++;
            $l--;
            $r++;
        }
    }
}
