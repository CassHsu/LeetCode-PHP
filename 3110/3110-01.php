<?
class Solution {
    function scoreOfString($s) {
        $score = 0;

        for ($i = 1; $i < strlen($s); $i++) {
            $score += abs(ord($s[$i - 1]) - ord($s[$i]));
        }

        return $score;
    }
}
