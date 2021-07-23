<?php
class Solution {
    /**
     * @param Integer[][] $edges
     * @return Integer
     */
    function findCenter($edges) {
        $center = 1;
        $num = count($edges);
        
        for ($i = 1; $i <= $num + 1; $i++) {
            $count = 0;
            
            foreach ($edges as $e) {
                if ($e[0] !== $i && $e[1] !== $i) break;
                $count++;
            }
            
            if ($count === $num) {
                $center = $i;
                break;
            }
        }
        
        return $center;
    }
}
