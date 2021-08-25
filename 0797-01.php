<?php
class Solution {

    /**
     * @param Integer[][] $graph
     * @return Integer[][]
     */
    var $ans;
    
    function allPathsSourceTarget($graph) {
        $this->ans = array();
        $this::backtrack($graph, [0], 0);
        return $this->ans;
    }
    
    function backtrack($graph, $path, $curr) {
        if ($curr + 1 === count($graph)) {
            array_push($this->ans, $path);
            return;
        }
        
        foreach ($graph[$curr] as $n) {
            array_push($path, $n);
            $this::backtrack($graph, $path, $n);
            array_pop($path);
        }
    }
}
