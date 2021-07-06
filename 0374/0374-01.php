<?php
class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {
        $low = 1;
        $high = $n;
        
        while ($low <= $high) {
            $mid = floor($low + ($high - $low) / 2);
            $res = $this->guess($mid);
            
            if ($res === 0) {
                return $mid;
            } else if ($res > 0) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        
        return -1;
    }
}
