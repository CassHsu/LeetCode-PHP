<?php
class Solution {
    function backspaceCompare($s, $t) {
        $rs = $this->buildit($s);
        $rt = $this->buildit($t);
        return $rs === $rt;
    }
    
    function buildit($st) {
        $r = [];
        $spit = str_split($st);
        foreach($spit as $c){
            if ($c === '#') {
                if (count($r) > 0) {
                    array_pop($r);
                }
                
            } else {
                array_push($r, $c);
            }
        }
        
        return join("", $r);
    }
}
