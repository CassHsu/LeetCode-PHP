<?php
class Solution {
    function findGCD($nums) {
        return $this::gcd(max($nums), min($nums));
    }
    
    function gcd($a, $b) {
        if ($b === 0) return $a;
        return $this::gcd($b, $a % $b);
    }
}
