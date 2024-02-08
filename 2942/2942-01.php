<?
class Solution {
    function findWordsContaining($words, $x) {
        $ans = [];
        $count = count($words);

        for ($i = 0; $i < $count; $i++) {
            if (str_contains($words[$i], $x)) {
                array_push($ans, $i);
            }
        }

        return $ans;
    }
}
