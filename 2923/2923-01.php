<?php
class Solution {
    function findChampion($grid) {
        $n = count($grid);
        $m = count($grid[0]);

        for ($i = 0; $i < $n; $i++) {
          $sum = 0;
          for ($j = 0; $j < $m; $j++) {
            $sum += $grid[$i][$j];
            if ($sum == $n - 1) return $i;
          }
        }

        return 0;
    }
}
