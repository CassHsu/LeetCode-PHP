<?
class Solution {
    function maximizeSum($nums, $k) {
        $ans = 0;
        $mx = max($nums);

        for ($i = 0; $i < $k; $i++) {
            $ans += $mx;
            $ans += $i;
        }

        return $ans;
    }
}
