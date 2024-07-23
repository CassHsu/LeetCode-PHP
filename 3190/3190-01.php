<?
class Solution {
    function minimumOperations($nums) {
        $count = 0;

        foreach ($nums as $n) {
            if ($n % 3 != 0) $count++;
        }

        return $count;
    }
}
