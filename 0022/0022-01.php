<?php
class Solution {
    /**
     * @param Integer $n
     * @return String[]
     */
    var $ret = array();
    var $s = array();
    function generateParenthesis($n) {
        $this->backtrack(0, 0, $n);
        return $this->ret;
    }
    
    function backtrack($left, $right, $n) {
        if (count($this->s) === $n * 2) {
            array_push($this->ret, implode("", $this->s));
            return;
        }
        
        if ($left > $right) {
            array_push($this->s, ")");
            $this->backtrack($left, $right + 1, $n);
            array_pop($this->s);
        }
        
        if ($left < $n) {
            array_push($this->s, "(");
            $this->backtrack($left + 1, $right, $n);
            array_pop($this->s);
        }
        return;
    }
}
