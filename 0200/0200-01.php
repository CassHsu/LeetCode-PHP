<?php
class Solution {
    function numIslands($grid) {
        $row = count($grid);
        if ($row <= 0) return 0;
        
        $col = count($grid[0]);
        $islands = 0;
        
        for ($r = 0; $r < $row; $r++) {
            for ($c = 0; $c < $col; $c++) {
                if ($grid[$r][$c] === '1') {
                    $islands++;
                    $this->dfs($grid, $row, $col, $r, $c);
                }
            }
        }
        
        return $islands;
    }
    
    function dfs(&$grid, $row, $col, $r, $c) {
        if ($r < 0 || $c < 0 || $r >= $row || $c >= $col || $grid[$r][$c] !== '1') return;
        
        $grid[$r][$c] = '0';
        $this->dfs($grid, $row, $col, $r+1, $c);
        $this->dfs($grid, $row, $col, $r, $c+1);
        $this->dfs($grid, $row, $col, $r-1, $c);
        $this->dfs($grid, $row, $col, $r, $c-1);
        return;
    }
}