<?
class Solution {
    function kthDistinct($arr, $k) {
        $cm = array();
        
        foreach ($arr as $a) {
            if ($cm[$a] != null) $cm[$a]++;
            else $cm[$a] = 1;
        }
        
        foreach($arr as $a) {
            if ($cm[$a] == 1) {
                $k--;
                if ($k == 0) return $a;
            }
        }
        
        return "";
    }
}
