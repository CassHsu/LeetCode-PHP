<?php
class Solution {
    var $m = array();
    
    function arraysIntersection($arr1, $arr2, $arr3) {
        $ans = array();
        
        foreach ($arr1 as $n) { $this->countIt($n); }
        foreach ($arr2 as $n) { $this->countIt($n); }
        foreach ($arr3 as $n) { $this->countIt($n); }
        
        foreach ($this->m as $k => $v) {
            if ($v === 3) array_push($ans, $k);
        }
        
        return $ans;
    }
    
    function countIt($n) {
        if ($this->m[$n]) $this->m[$n]++;
        else $this->m[$n] = 1;
    }
}
