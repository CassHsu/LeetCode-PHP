<?
class Solution {
    function isAcronym($words, $s) {
        $w = "";
        foreach ($words as $k => $v) {
            $w .= $v[0];
        }

        return $w == $s;
    }
}
