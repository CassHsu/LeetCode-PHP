<?
class Solution {
    function makeEqual($words) {
        $n = count($words);
        $m = array();
        $all = str_split(implode("", $words));
        
        foreach ($all as $c) {
            if ($m[$c]) {
                $m[$c]++;
            } else {
                $m[$c] = 1;
            }
        }
        
        foreach ($m as $k => $v) {
            if ($v % $n !== 0) return false;
        }
        
        return true;
    }
}
