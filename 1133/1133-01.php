<?
class Solution {
    function largestUniqueNumber($nums) {
        $m = array();
        $singles = array();
        
        foreach ($nums as $n) {
            $v = $m[$n];
            if ($v) $m[$n] = $v + 1;
            else $m[$n] = 1;
        }
        
        foreach ($m as $k => $v) {
            if ($v === 1) array_push($singles, $k);
        }
        
        return count($singles) > 0 ? max($singles) : -1;
    }
}
