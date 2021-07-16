<?php
class Solution {

    /**
     * @param Integer[] $timeSeries
     * @param Integer $duration
     * @return Integer
     */
    function findPoisonedDuration($timeSeries, $duration) {
        $count = $duration;
        
        for ($i = 1; $i < count($timeSeries); $i++) {
            $diff = $timeSeries[$i] - $timeSeries[$i - 1];
            
            $count += $duration;
            if ($diff < $duration) {
                $count -= $duration - $diff;
            }
        }
        
        return $count;
    }
}
