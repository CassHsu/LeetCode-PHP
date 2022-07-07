<?php
class Solution {
    function fib($n) {
        if ($n === 0) return 0;
        if ($n < 3) return 1;
        return $this->fib($n - 1) + $this->fib($n - 2);
    }
}
