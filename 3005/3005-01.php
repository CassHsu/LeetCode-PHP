<?
class Solution {
    function maxFrequencyElements($nums) {
        $m = [];
        $max = 0;
        $count = 0;

        foreach ($nums as $n) {
            $f = (isset($m[$n]) ? $m[$n] : 0) + 1;
            if ($f == $max) $count++;
            else if ($f > $max) {
                $max = $f;
                $count = 1;
            }
            $m[$n] = $f;
        }

        return $max * $count;
    }
}
