<?
class Solution {
    function makeEqual($words) {
        $n = count($words);
        $m = array_count_values(str_split(implode("", $words)));
        
        foreach ($m as $k => $v) {
            if ($v % $n !== 0) return false;
        }
        
        return true;
    }
}
