<?php
class Solution {
    function splitWordsBySeparator($words, $separator) {
        $res = array();

        foreach ($words as $wrod) {
            $arr = explode($separator, $wrod);
            foreach ($arr as $w) {
                if ($w != "") {
                    array_push($res, $w);
                }
            }
        }

        return $res;
    }
}
