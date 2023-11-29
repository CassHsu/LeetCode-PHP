<?
class Solution {
    function minimizedStringLength($s) {
        $len = strlen($s);
        $res = [];
        for ($i = 0; $i < $len; $i++) {
            if (in_array($s[$i], $res) == false) {
                $res[] = $s[$i];
            }
        }
        return count($res);
    }
}
