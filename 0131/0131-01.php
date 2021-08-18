<?php
class Solution {

    /**
     * @param String $s
     * @return String[][]
     */
    var $ans;
    var $s;
    function partition($s) {
        $this->ans = array();
        $this->s = $s;
        $this->backtrack(array(), 0);
        return $this->ans;
    }
    
    function backtrack($curr, $start) {
        if ($start >= strlen($this->s)) {
            array_push($this->ans, $curr);
            return;
        }
        
        for ($end = $start; $end < strlen($this->s); $end++) {
            $tmp = substr($this->s, $start, ($end + 1) - $start);
            
            if ($tmp === strrev($tmp)) {
                array_push($curr, $tmp);
                $this->backtrack($curr, $end + 1);
                array_pop($curr);
            }
        }
    }
}
