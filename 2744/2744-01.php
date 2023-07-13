<?
class Solution {
    function maximumNumberOfStringPairs($words) {
        $count = 0;
        $n = count($words);

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($words[$i][0] == $words[$j][1] && $words[$i][1] == $words[$j][0]) {
                    $count++;
                }
            }
        }

        return $count;
    }
}
