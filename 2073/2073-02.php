<?
class Solution {
    function timeRequiredToBuy($tickets, $k) {
        $seconds = 0;
        $n = count($tickets);
        $queue = array_fill(0, $n - 1, 0);

        while ($queue[$k] < $tickets[$k]) {
            for ($i = 0; $i < $n; $i++) {
                 if ($queue[$k] == $tickets[$k] && $i > $k) break;

                 if ($queue[$i] < $tickets[$i]) {
                    $queue[$i] += 1;
                    $seconds += 1;
                }
            }
        }
        
        return $seconds;
    }
}
