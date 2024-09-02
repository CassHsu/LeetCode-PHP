<?
class Solution {
    function finalPositionOfSnake($n, $commands) {
        $x = 0;
        $d = array();

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $d[$i][$j] = $x;
                $x++;
            }
        }

        $i = 0;
        $j = 0;

        foreach ($commands as $command) {
            if ($command == "RIGHT") {
                $j++;
            } elseif ($command == "DOWN") {
                $i++;
            } elseif ($command == "LEFT") {
                $j--;
            } elseif ($command == "UP") {
                $i--;
            }
        }
        
        return $d[$i][$j];
    }
}
