<?php
class Solution {
    private $a, $b, $turn, $desk;
    private $blank = "-";
    
    function tictactoe($moves) {
        if (count($moves) < 5) return "Pending";
        
        $this->init("A", "B");
        foreach ($moves as $move) {
            $this->desk[$move[0]][$move[1]] = $this->turn;
            
            if ($this->isWin()) return $this->turn;
            
            $this->turn = ($this->turn === $this->a) ? $this->b : $this->a;
        }
        
        if ($this->isDraw()) return "Draw";
        return "Pending";
    }
    
    function init($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->turn = $a;
        
        $this->desk = array();
        for ($i = 0; $i < 3; $i++) {
            array_push($this->desk, array($this->blank, $this->blank, $this->blank));
        }
    }
    
    function isDraw() {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($this->desk[$i][$j] === $this->blank) return false;
            }
        }
        return true;
    }
    
    function isWin() {
        if ($this->desk[1][1] === $this->turn) {
            if ($this->desk[0][0] == $this->turn && $this->desk[2][2] == $this->turn) return $this->turn;
            if ($this->desk[0][2] == $this->turn && $this->desk[2][0] == $this->turn) return $this->turn;
        }
        
        for ($i = 0; $i < 3; $i++) {
            if ($this->desk[$i][0] == $this->turn && $this->desk[$i][1] == $this->turn && $this->desk[$i][2] == $this->turn) return $this->turn;
            if ($this->desk[0][$i] == $this->turn && $this->desk[1][$i] == $this->turn && $this->desk[2][$i] == $this->turn) return $this->turn;
        }
        
        return false;
    }
}
