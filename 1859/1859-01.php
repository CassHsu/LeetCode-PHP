<?php
class Solution {
    /**
     * @param String $s
     * @return String
     */
    function sortSentence($s) {
        $ss = explode(" ", $s);
        $ret = array();
        $size = count($ss);
        
        for ($i = 0; $i < $size; $i++) {
            array_push($ret, "");
        }
        
        foreach ($ss as $w) {
            $i = intval($w[strlen($w) - 1]);
            $ret[$i - 1] = substr($w, 0, strlen($w) - 1);
        }
        
        return join(" ", $ret);
    }
}
