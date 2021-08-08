<?php
class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    function uncommonFromSentences($s1, $s2) {
        $m = array();
        $ans = array();
        $s = $s1 . " " . $s2;
        $arr = explode(" ", $s);
        
        foreach ($arr as $w) {
            $v = $m[$w];
            if ($v) $m[$w] = $v + 1;
            else $m[$w] = 1;
        }
        
        foreach ($m as $k=>$v) {
            if ($v == 1) array_push($ans, $k);
        }
        
        return $ans;
    }
}
