<?
class Solution {
    function smallestEvenMultiple($n) {
        return $n % 2 == 0 ? $n : 2 * $n;
    }
}
